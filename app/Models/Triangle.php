<?php

namespace App\Models;

class Triangle extends Figure
{
    private Point $firstPoint;
    private Point $secondPoint;
    private Point $thirdPoint;

    /**
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @param int $x3
     * @param int $y3
     */
    public function __construct(int $x1, int $y1, int $x2, int $y2, int $x3, int $y3)
    {
        $this->firstPoint = new Point($x1, $y1);
        $this->secondPoint = new Point($x2, $y2);
        $this->thirdPoint = new Point($x3, $y3);
    }

    public function draw($colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];
        $index = $parentResult['index'];

        imagepolygon(
            $image,
            [
                $this->firstPoint->getX(),
                $this->firstPoint->getY(),
                $this->secondPoint->getX(),
                $this->secondPoint->getY(),
                $this->thirdPoint->getX(),
                $this->thirdPoint->getY(),
            ],
            $color
        );
        imagepng($image, '/var/www/public/figures/temp_image.png');

        chmod('/var/www/public/figures/temp_image.png', octdec("0777"));
        session()->push('figure', 'triangle' . $index);
        header("location: /");
        return array();
    }


}
