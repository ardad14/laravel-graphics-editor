<?php

namespace App\Http\Services;

use App\Http\Factories\FigureFactory;

class ImageService
{
    public static function drawFigure($requset)
    {
        switch ($requset['type']) {
            case "point":
                $point = FigureFactory::makePoint($requset['pointXCoord'], $requset['pointYCoord']);
                $point->draw($requset['pointColor']);
                break;

            case "section":
                $section = FigureFactory::makeSection(
                    $requset['sectionFirstXCoord'],
                    $requset['sectionFirstYCoord'],
                    $requset['sectionSecondXCoord'],
                    $requset['sectionSecondYCoord']
                );
                $section->draw($requset["sectionColor"]);
                break;

            case "square":
                $square = FigureFactory::makeSquare(
                    $requset['squareFirstXCoord'],
                    $requset['squareFirstYCoord'],
                    $requset['squareLength']
                );
                $square->draw($requset["squareColor"]);
                break;

            case "rectangle":
                $rectangle= FigureFactory::makeRectangle(
                    $requset['rectangleFirstXCoord'],
                    $requset['rectangleFirstYCoord'],
                    $requset['rectangleSecondXCoord'],
                    $requset['rectangleSecondYCoord']
                );
                $rectangle->draw($requset["rectangleColor"]);
                break;
        }
    }
}
