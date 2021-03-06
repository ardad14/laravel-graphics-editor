<?php

namespace App\Models;

class Section extends Figure
{
    private Point $secondPoint;

    /**
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     */
    public function __construct(int $x1, int $y1, int $x2, int $y2)
    {
        $this->setX($x1);
        $this->setY($y1);
        $this->secondPoint = new Point($x2, $y2);
    }

    public function draw(int $colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];
        $index = $parentResult['index'];

        imageline($image, $this->getX(), $this->getY(), $this->secondPoint->getX(), $this->secondPoint->getY(), $color);
        imagepng($image, '/var/www/public/images/temp_image.png');

        chmod('/var/www/public/images/temp_image.png', octdec("0777"));
        session()->push('figure', 'section' . $index);
        header("location: /");
        return array();
    }
}
