<?php

namespace App\Models;

class Rectangle extends Figure
{
    protected Point $rightBottom;
    public function __construct(int $x1, int $y1, int $x2, int $y2)
    {
        $this->setX($x1);
        $this->setY($y1);
        $this->rightBottom = new Point($x2, $y2);
    }

    public function draw(int $colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];
        $index = $parentResult['index'];

        ImageRectAngle($image, $this->getX(), $this->getY(), $this->rightBottom->getX(), $this->rightBottom->getY(), $color);
        imagepng($image, '/var/www/public/images/temp_image.png');

        chmod('/var/www/public/images/temp_image.png', octdec("0777"));
        session()->push('figure', 'rectangle' . $index);
        header("location: /");
        return array();
    }
}
