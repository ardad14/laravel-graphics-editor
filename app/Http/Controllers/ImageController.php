<?php

namespace App\Http\Controllers;

use App\Http\Services\FileService;
use App\Http\Services\ImageService;
use Faker\Core\File;

class ImageController extends Controller
{
    public function draw()
    {
        ImageService::drawFigure($_REQUEST);
    }

    public function getFigure()
    {
        FileService::sendFigure();
    }

    public function clearCanvas()
    {
        FileService::clearCanvas();
    }
}
