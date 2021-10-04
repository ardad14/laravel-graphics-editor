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
        $index = $parentResult['index'];

        ImageRectAngle($image, $this->getX(), $this->getY(), $this->getX()+2, $this->getY()+2, $color);
        imagepng($image, '/var/www/public/figures/image.png');

        chmod('/var/www/public/figures/image.png', octdec("0777"));
        session()->push('figure', 'point' . $index);
        header("location: /");
        return ['image' => $image, 'color' => $color];
    }
}
