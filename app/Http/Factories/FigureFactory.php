<?php

namespace App\Http\Factories;

use App\Models\Circle;
use App\Models\Ellipse;
use App\Models\Parallelogram;
use App\Models\Point;
use App\Models\Rectangle;
use App\Models\Section;
use App\Models\Square;
use App\Models\Text;
use App\Models\Triangle;

class FigureFactory
{
    public static function makePoint($x1, $y1): Point
    {
        return new Point($x1, $y1);
    }

    public static function makeSection($x1, $y1, $x2, $y2): Section
    {
        return new Section($x1, $y1, $x2, $y2);
    }

    public static function makeSquare($x1, $y1, $length): Square
    {
        return new Square($x1, $y1, $length);
    }

    public static function makeRectangle($x1, $y1, $x2, $y2): Rectangle
    {
        return new Rectangle($x1, $y1, $x2, $y2);
    }

    public static function makeParallelogram($x1, $y1, $x2, $y2, $x3, $y3): Parallelogram
    {
        return new Parallelogram($x1, $y1, $x2, $y2, $x3, $y3);
    }

    public static function makeCircle($x1, $y1, $radius): Circle
    {
        return new Circle($x1, $y1, $radius);
    }

    public static function makeEllipse($x1, $y1, $longRadius, $shortRadius): Ellipse
    {
        return new Ellipse($x1, $y1, $longRadius, $shortRadius);
    }

    public static function makeTriangle($x1, $y1, $x2, $y2, $x3, $y3): Triangle
    {
        return new Triangle($x1, $y1, $x2, $y2, $x3, $y3);
    }

    public static function makeText($x, $y, $text, $fontSize): Text
    {
        return new Text($x, $y, $text, $fontSize);
    }
}
