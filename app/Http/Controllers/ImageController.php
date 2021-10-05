<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveImageRequest;
use App\Http\Requests\SquareRequest;
use App\Http\Services\FileService;
use App\Http\Services\ImageService;
use App\Http\Requests\FigureRequest;

class ImageController extends Controller
{
    public function draw(FigureRequest $request): void
    {
        ImageService::drawFigure($request->all());
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
