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

        if (file_exists('/var/www/public/images/temp_image.png')) {
            $image = imagecreatefrompng('/var/www/public/images/temp_image.png');
        }

        if (session()->get('figure') === null) {
            $index = 0;
        } else {
            $index = count(session()->get('figure'));
        }

        $color = Color::getColorFromCode($image, $colorCode);
        imagesetthickness($image, 8);
        return ['image' => $image, 'color' => $color, 'index' => $index];
    }
}
