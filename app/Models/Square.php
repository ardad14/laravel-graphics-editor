<?php

namespace App\Models;

class Square extends Rectangle
{
    /**
     * @param int $x1
     * @param int $y1
     * @param int $length
     */
    public function __construct(int $x1, int $y1, int $length)
    {
        parent::__construct(
            $x1,
            $y1,
            $x1 + sqrt(pow($length, 2) * 2),
            $y1 + sqrt(pow($length, 2) * 2)
        );

    }

    public function draw(int $colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        return array();
    }
}
