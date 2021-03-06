<?php

namespace App\Http\Services;

use App\Http\Factories\FigureFactory;
use App\Http\Requests\CanvasUpdateRequest;
use App\Models\Image;

class ImageService
{
    /**
     * Get FigureRequest, make figure object and make it draws
     * @param $request
     */
    public static function drawFigure($request)
    {
        switch ($request['type']) {
            case "point":
                $point = FigureFactory::makePoint($request['pointXCoord'], $request['pointYCoord']);
                $point->draw($request['pointColor']);
                break;

            case "section":
                $section = FigureFactory::makeSection(
                    $request['sectionFirstXCoord'],
                    $request['sectionFirstYCoord'],
                    $request['sectionSecondXCoord'],
                    $request['sectionSecondYCoord']
                );
                $section->draw($request["sectionColor"]);
                break;

            case "square":
                $square = FigureFactory::makeSquare(
                    $request['squareFirstXCoord'],
                    $request['squareFirstYCoord'],
                    $request['squareLength']
                );
                $square->draw($request["squareColor"]);
                break;

            case "rectangle":
                $rectangle= FigureFactory::makeRectangle(
                    $request['rectangleFirstXCoord'],
                    $request['rectangleFirstYCoord'],
                    $request['rectangleSecondXCoord'],
                    $request['rectangleSecondYCoord']
                );
                $rectangle->draw($request["rectangleColor"]);
                break;

            case "parallelogram":
                $triangle = FigureFactory::makeParallelogram(
                    $request['parallelogramFirstXCoord'],
                    $request['parallelogramFirstYCoord'],
                    $request['parallelogramSecondXCoord'],
                    $request['parallelogramSecondYCoord'],
                    $request['parallelogramThirdXCoord'],
                    $request['parallelogramThirdYCoord'],
                );
                $triangle->draw($request["parallelogramColor"]);
                break;

            case "circle":
                $circle = FigureFactory::makeCircle(
                    $request['circleXCoord'],
                    $request['circleYCoord'],
                    $request['circleRadius'],
                );
                $circle->draw($request["circleColor"]);
                break;

            case "ellipse":
                $ellipse = FigureFactory::makeEllipse(
                    $request['ellipseXCoord'],
                    $request['ellipseYCoord'],
                    $request['ellipseLongRadius'],
                    $request['ellipseShortRadius'],
                );
                $ellipse->draw($request["ellipseColor"]);
                break;

            case "triangle":
                $triangle = FigureFactory::makeTriangle(
                    $request['triangleFirstXCoord'],
                    $request['triangleFirstYCoord'],
                    $request['triangleSecondXCoord'],
                    $request['triangleSecondYCoord'],
                    $request['triangleThirdXCoord'],
                    $request['triangleThirdYCoord'],
                );
                $triangle->draw($request["triangleColor"]);
                break;

            case "text":
                $text = FigureFactory::makeText(
                    $request['textXCoord'],
                    $request['textYCoord'],
                    $request['textString'],
                    $request['textSize'],
                );
                $text->draw($request["textColor"]);
                break;
        }
    }

    /**
     * Set up in temp file temp_image.png image from path
     * @param $imagePath
     */
    public static function createImageFromFile($imagePath): void
    {
        preg_match('/\.(.*)$/U', $imagePath, $matches);
        switch ($matches[1]) {
            case 'png':
                $image = imagecreatefrompng($imagePath);
                break;
            case 'jpeg':
                $image = imagecreatefromjpeg($imagePath);
                break;
        }

        imagepng($image, '/var/www/public/images/temp_image.png');

        chmod('/var/www/public/images/temp_image.png', octdec("0777"));
        header("location: /");
    }

    /**
     * Update canvas width and height
     * @param CanvasUpdateRequest $request
     */
    public static function canvasUpdate(CanvasUpdateRequest $request): void
    {
        Image::setImageWidth($request['canvasWidth']);
        Image::setImageHeight($request['canvasHeight']);
    }
}
