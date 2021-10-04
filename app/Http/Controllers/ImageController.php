<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveImageRequest;
use App\Http\Services\FileService;
use App\Http\Services\ImageService;
use Faker\Core\File;

class ImageController extends Controller
{
    public function draw(): void
    {
        ImageService::drawFigure($_REQUEST);
    }

    public function getFigure(): void
    {
        FileService::sendFigure();
    }

    public function clearCanvas(): void
    {
        FileService::clearCanvas();
    }

    public function saveImage(SaveImageRequest $request): void
    {
        FileService::saveImage($request);
    }
}
