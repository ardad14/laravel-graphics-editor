<?php

namespace App\Models;

class Square extends Rectangle
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


    public function draw(int $colorCode, array $points): array
    {
        $points[2] = $points[0] + sqrt(pow($this->length, 2) * 2);
        $points[3] = $points[1] + sqrt(pow($this->length, 2) * 2);
        $parentResult = parent::draw($colorCode, $points);

        return array();
    }
}
