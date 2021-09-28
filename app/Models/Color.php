<?php

namespace App\Models;

abstract class Color
{
    public const BLACK  = 1;
    public const WHITE  = 2;
    public const RED    = 3;
    public const GREEN  = 4;
    public const BLUE   = 5;
    public const YELLOW = 6;

    /**
     * Get color code from front and set current color to image
     * @param $image
     * @param int $code
     * @return false|int|void
     */
    public static function getColorFromCode($image, int $code)
    {
        switch ($code) {
            case 1:
                return ImageColorAllocate($image, 0,0,0);
            case 2:
                return ImageColorAllocate($image, 255,255,255);
            case 3:
                return ImageColorAllocate($image, 255,0,0);
            case 4:
                return ImageColorAllocate($image, 0,255,0);
            case 5:
                return ImageColorAllocate($image, 0,0,255);
            case 6:
                return ImageColorAllocate($image, 255,255,0);
        }
    }

    /**
     * Return black color for image
     * @param $image
     * @return false|int
     */
    public static function getBlackColor($image)
    {
        return ImageColorAllocate($image, 0,0,0);
    }

    /**
     * Return white color for image
     * @param $image
     * @return false|int
     */
    public static function getWhiteColor($image)
    {
        return ImageColorAllocate($image, 255,255,255);
    }

    /**
     * Return red color for image
     * @param $image
     * @return false|int
     */
    public static function getRedColor($image)
    {
        return ImageColorAllocate($image, 255,0,0);
    }

    /**
     * Return green color for image
     * @param $image
     * @return false|int
     */
    public static function getGreenColor($image)
    {
        return ImageColorAllocate($image, 0,255,0);
    }

    /**
     * Return blue color for image
     * @param $image
     * @return false|int
     */
    public static function getBlueColor($image)
    {
        return ImageColorAllocate($image, 0,0,255);
    }

    /**
     * Return yellow color for image
     * @param $image
     * @return false|int
     */
    public static function getYellowColor($image)
    {
        return ImageColorAllocate($image, 255,255,0);
    }
}
