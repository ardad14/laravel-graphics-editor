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

        if (session()->get('figure') === null) {
            $index = 0;
        } else {
            $index = count(session()->get('figure'));
        }

        if (file_exists('/var/www/public/figures/image.png')) {
            $image = imagecreatefrompng('/var/www/public/figures/image.png');
        }

        $color = Color::getColorFromCode($image, $colorCode);

        imageellipse($image, $this->getX(), $this->getY(), $this->longDiameter, $this->shortDiameter, $color);
        imagepng($image, '/var/www/public/figures/image.png');

        chmod('/var/www/public/figures/image.png', octdec("0777"));
        session()->push('figure', 'circle' . $index);
        header("location: /");
        return array();
    }
}
