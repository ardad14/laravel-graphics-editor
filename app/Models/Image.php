<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    private static $imageFormat = "png";
    private static $imageWidth = 1080;
    private static $imageHeight = 850;
    private array $imageFigures;

    public function __construct()
    {
        parent::__construct();
        $this->imageFigures = array();
    }

    /**
     * @return string
     */
    public static function getImageFormat(): string
    {
        return self::$imageFormat;
    }

    /**
     * @param string $imageFormat
     */
    public static function setImageFormat(string $imageFormat): void
    {
        self::$imageFormat = $imageFormat;
    }

    /**
     * @return int
     */
    public static function getImageWidth(): int
    {
        return self::$imageWidth;
    }

    /**
     * @param int $imageWidth
     */
    public static function setImageWidth(int $imageWidth): void
    {
        self::$imageWidth = $imageWidth;
    }

    /**
     * @return int
     */
    public static function getImageHeight(): int
    {
        return self::$imageHeight;
    }

    /**
     * @param int $imageHeight
     */
    public static function setImageHeight(int $imageHeight): void
    {
        self::$imageHeight = $imageHeight;
    }

    /**
     * @return array
     */
    public function getImageFigures(): array
    {
        return $this->imageFigures;
    }

    /**
     * @param string $imageFigures
     */
    public function setImageFigures(string $imageFigures): void
    {
        $this->imageFigures[] = $imageFigures;
    }

    public function saveImage(): void
    {
        switch (self::getImageFormat()) {
            case "png":
                break;

            case "jpeg":
                break;
        }
    }
}
