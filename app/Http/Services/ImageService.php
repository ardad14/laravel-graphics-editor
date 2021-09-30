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

            case "parallelogram":
                $triangle = FigureFactory::makeParallelogram(
                    $requset['parallelogramFirstXCoord'],
                    $requset['parallelogramFirstYCoord'],
                    $requset['parallelogramSecondXCoord'],
                    $requset['parallelogramSecondYCoord'],
                    $requset['parallelogramThirdXCoord'],
                    $requset['parallelogramThirdYCoord'],
                );
                $triangle->draw($requset["parallelogramColor"]);
                break;

            case "circle":
                $circle = FigureFactory::makeCircle(
                    $requset['circleXCoord'],
                    $requset['circleYCoord'],
                    $requset['circleRadius'],
                );
                $circle->draw($requset["circleColor"]);
                break;

            case "ellipse":
                $ellipse = FigureFactory::makeEllipse(
                    $requset['ellipseXCoord'],
                    $requset['ellipseYCoord'],
                    $requset['ellipseLongRadius'],
                    $requset['ellipseShortRadius'],
                );
                $ellipse->draw($requset["ellipseColor"]);
                break;

            case "triangle":
                $triangle = FigureFactory::makeTriangle(
                    $requset['triangleFirstXCoord'],
                    $requset['triangleFirstYCoord'],
                    $requset['triangleSecondXCoord'],
                    $requset['triangleSecondYCoord'],
                    $requset['triangleThirdXCoord'],
                    $requset['triangleThirdYCoord'],
                );
                $triangle->draw($requset["triangleColor"]);
                break;

            case "text":
                $text = FigureFactory::makeText(
                    $requset['textXCoord'],
                    $requset['textYCoord'],
                    $requset['textString'],
                    $requset['textSize'],
                );
                $text->draw($requset["textColor"]);
                break;
        }
    }
}
