<?php

namespace App\Models;

class Point extends Figure
{
    /**
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    public function draw(int $colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];

        ImageRectAngle($image, $this->getX(), $this->getY(), $this->getX()+2, $this->getY()+2, $color);

        header('Content-type: image/png');
        ImagePng($image);
        return array();
    }
}
