<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

class FileService
{
    public static function sendFigure(): void
    {
        $allowed_types=array("jpg", "png", "svg");
        $i=0;
        $directory = '/var/www/public/figures';
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

    public static function clearCanvas(): void
    {
        unlink('/var/www/public/figures/temp_image.png');
        session()->pull('figure');
        header("Location: /");
    }

    public static function saveImage($request): void
    {
        $file = '/var/www/public/figures/temp_image.png';
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
}
