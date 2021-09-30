<?php

namespace App\Models;

class Text extends Figure
{
    private $text;
    private $fontSize;
    private Point $point;

    /**
     * @param $fontSize
     * @param Point $point
     * @param $text
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

        $fontStyle = dirname(__FILE__) . '/Roboto-Regular.ttf';

        imagettftext($image, $this->fontSize, 0, $this->point->getX(), $this->point->getY(), $color, $fontStyle, $this->text);


        header('Content-type: image/png');
        ImagePng($image);
        return array();
    }
}
