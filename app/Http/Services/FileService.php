<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FileService
{
    /**
     * Send to JavaScript temp files from /var/www/public/images to load it on front
     */
    public static function sendFigure(): void
    {
        $allowed_types=array("jpg", "png", "svg");
        $i=0;
        $directory = '/var/www/public/images';
        $dir_handle = opendir($directory);

        while ($file = readdir($dir_handle)) {
            if ($file=="." || $file == "..") {
                continue;
            }
            $file_parts = explode(".", $file);
            $ext = strtolower(array_pop($file_parts));


            if (in_array($ext, $allowed_types)) {
                echo "/" . $file;
                $i++;
            }
        }
        closedir($dir_handle);  //закрыть папку
    }

    /**
     * Clear canvas through deleting temp file temp_image.png
     */
    public static function clearCanvas(): void
    {
        $canvasFile = '/var/www/public/images/temp_image.png';
        if (file_exists($canvasFile)) {
            unlink($canvasFile);
            session()->pull('figure');
        }

        header("Location: /");
    }

    /**
     * Save user image on file system and set record to DB
     * @param $request
     */
    public static function saveImage($request): void
    {
        $file = '/var/www/public/images/temp_image.png';
        copy($file, '/var/www/storage/app/public/images/' . $request['fileName'] . '.png');
        $file = '/var/www/storage/app/public/images/' . $request['fileName'] . '.png';
        chmod($file, octdec('0777'));
        header('Content-Type: image/png');
        header('Content-Disposition: attachment; filename="' . $request['fileName'] . '.png"');

        readfile($file);

        DB::table('images')->insert([
            'fileName' => $request['fileName'],
            'username' => $request['username'],
            'image' => $file,
        ]);
    }

    /**
     * Save user`s custom image to file system and open it in temp file temp_image.png
     * @param Request $request
     */
    public static function uploadImage(Request $request): void
    {
        if ($request->isMethod('post') && $request->file('userfile')) {
            $request->validate([
                'userfile' => 'image',
                'userfile' => 'mimetypes:image/jpeg,image/png',
            ]);
            $file = $request->file('userfile');
            $upload_folder = 'public/userImages';
            $filename = $file->getClientOriginalName();

            Storage::putFileAs($upload_folder, $file, $filename);
            chmod('/var/www/storage/app/public/userImages/' . $filename, octdec('0777'));
            rename('/var/www/storage/app/public/userImages/' . $filename, '/var/www/storage/app/public/userImages/user_image.jpeg');
        }
        self::clearCanvas();
        ImageService::createImageFromFile('/var/www/storage/app/public/userImages/user_image.jpeg');
    }

    /**
     * Open old user images using DB and file system and make temp file temp_image.png
     * @param $userId
     */
    public static function openUserImage($userId): void
    {
        $image = DB::table('images')
            ->where('id', '=', $userId)
            ->first();
        self::clearCanvas();
        ImageService::createImageFromFile($image->image);
    }
}
