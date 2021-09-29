<?php

namespace App\Models;

abstract class Figure
{
    private $x;
    private $y;

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
        $image = imagecreate(Image::getImageWidth(), Image::getImageHeight());
        $white = Color::getWhiteColor($image);
        $color = Color::getColorFromCode($image, $colorCode);
        imagesetthickness($image, 7);
        return ['image' => $image, 'color' => $color];
    }

}
