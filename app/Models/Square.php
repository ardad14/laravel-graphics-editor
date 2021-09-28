<?php

namespace App\Models;

class Square extends Figure
{
    private int $length;

    /**
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @param int $height
     */
    public function __construct(int $x1, int $y1, int $length)
    {
        $this->setX($x1);
        $this->setY($y1);
        $this->length = $length;
    }


    public function draw($colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];

        ImageRectAngle(
            $image,
            $this->getX(),
            $this->getY(),
            $this->getX() + sqrt(pow($this->length, 2) * 2 ),
            $this->getY() + sqrt(pow($this->length, 2) * 2 ),
            $color
        );

        header('Content-type: image/png' );
        ImagePng( $image );
        return array();
    }


}
