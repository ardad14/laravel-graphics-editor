<?php

namespace App\Models;

class Text extends Figure
{
    private $text;
    private $fontSize;
    private Point $point;

    /**
     * @param $x
     * @param $y
     * @param $text
     * @param $fontSize
     */
    public function __construct($x, $y, $text, $fontSize)
    {
        $this->fontSize = $fontSize;
        $this->point = new Point($x, $y);
        $this->text = $text;
    }

    public function draw(int $colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];
        $index = $parentResult['index'];

        $fontStyle = dirname(__FILE__) . '/Roboto-Regular.ttf';

        imagettftext($image, $this->fontSize, 0, $this->point->getX(), $this->point->getY(), $color, $fontStyle, $this->text);
        imagepng($image, '/var/www/public/figures/temp_image.png');

        chmod('/var/www/public/figures/temp_image.png', octdec("0777"));
        session()->push('figure', 'text' . $index);
        header("location: /");
        return array();
    }
}
