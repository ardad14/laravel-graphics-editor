<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveImageRequest;
use App\Http\Services\FileService;
use App\Http\Services\ImageService;
use App\Http\Requests\FigureRequest;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Get FigureRequest and draw all of figures
     * @param FigureRequest $request
     */
    public function draw(FigureRequest $request): void
    {
        ImageService::drawFigure($request->all());
    }

    /**
     * Send temp file temp_image.png to JavaScript
     */
    public function getFigure(): void
    {
        FileService::sendFigure();
    }

    /**
     * Clear canvas through deleting temp file temp_image.png
     */
    public function clearCanvas(): void
    {
        FileService::clearCanvas();
    }

    /**
     * Save image with user in DB
     * @param SaveImageRequest $request
     */
    public function saveImage(SaveImageRequest $request): void
    {
        FileService::saveImage($request);
    }

    /**
     * Upload user`s custom picture at the canvas
     * @param Request $request
     */
    public function uploadImage(Request $request): void
    {
        FileService::uploadImage($request);
    }

    /**
     * Open old user images using DB and file system and make temp file temp_image.png
     * @param $userId
     */
    public function openUserImage($userId): void
    {
        FileService::openUserImage($userId);
    }
}
