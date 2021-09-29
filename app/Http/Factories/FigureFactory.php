<?php

namespace App\Http\Factories;

use App\Models\Circle;
use App\Models\Point;
use App\Models\Rectangle;
use App\Models\Section;
use App\Models\Square;

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

    public static function makeCircle($x1, $y1, $radius): Circle
    {
        return new Circle($x1, $y1, $radius);
    }
}
