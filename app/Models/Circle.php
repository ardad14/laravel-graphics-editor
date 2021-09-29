<?php

namespace App\Models;

class Circle extends Figure
{
    protected int $radius;

    /**
     * @param int $x
     * @param int $y
     * @param int $radius
     */
    public function __construct(int $x, int $y, int $radius)
    {
        $this->setX($x);
        $this->setY($y);
        $this->radius = $radius;
    }

    public function draw(int $colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];

        imageellipse($image, $this->getX(), $this->getY(), $this->radius * 2, $this->radius * 2, $color);

        header('Content-type: image/png');
        ImagePng($image);
        return array();
    }
}
