<?php

namespace App\Models;

abstract class Figure
{
    private $x;
    private $y;
    protected const CANVAS_WIDTH = 1080;
    protected const CANVAS_HEIGHT = 720;

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x): void
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y): void
    {
        $this->y = $y;
    }


    protected function draw(int $colorCode): array
    {
        $image = imagecreate(self::CANVAS_WIDTH, self::CANVAS_HEIGHT);
        $white = Color::getWhiteColor($image);
        $color = Color::getColorFromCode($image, $colorCode);
        imagesetthickness($image, 8);
        return ['image' => $image, 'color' => $color];
    }

}
