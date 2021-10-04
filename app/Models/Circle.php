<?php

namespace App\Models;

class Circle extends Ellipse
{
    /**
     * @param int $x
     * @param int $y
     * @param int $radius
     */
    public function __construct(int $x, int $y, int $radius)
    {
        parent::__construct($x, $y, $radius, $radius);
    }

    public function draw(int $colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        return array();
    }
}
