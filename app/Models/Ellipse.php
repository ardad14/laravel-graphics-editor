<?php

namespace App\Models;

class Ellipse extends Figure
{
    private int $longDiameter;
    private int $shortDiameter;

    public function __construct(int $x, int $y, int $longRadius, int $shortRadius)
    {
        $this->setX($x);
        $this->setY($y);
        $this->shortDiameter = $shortRadius * 2;
        $this->longDiameter = $longRadius * 2;
    }

    public function draw(int $colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];

        imageellipse($image, $this->getX(), $this->getY(), $this->longDiameter, $this->shortDiameter, $color);

        header('Content-type: image/png');
        ImagePng($image);
        return array();
    }


}
