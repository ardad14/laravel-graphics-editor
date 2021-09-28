<?php

namespace App\Models;

class Point extends Figure
{
    private const CANVAS_WIDTH = 1080;
    private const CANVAS_HEIGHT = 720;
    /**
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    public function draw(int $colorCode): void
    {
        $image = imagecreate(self::CANVAS_WIDTH, self::CANVAS_HEIGHT);
        $white = Color::getWhiteColor($image);
        $color = Color::getColorFromCode($image, $colorCode);

        imagesetthickness($image, 7);
        ImageRectAngle( $image, $this->getX(), $this->getY(), $this->getX()+2, $this->getY()+2, $color );
        header('Content-type: image/png' );

        header('Content-type: image/png' );
        ImagePng( $image );

    }


}
