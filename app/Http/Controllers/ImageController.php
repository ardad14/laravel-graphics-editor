<?php

namespace App\Http\Controllers;

use App\Http\Services\ImageService;

class ImageController extends Controller
{
    public function draw()
    {
        ImageService::drawFigure($_REQUEST);
    }
}
