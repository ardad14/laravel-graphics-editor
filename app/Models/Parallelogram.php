<?php

namespace App\Models;

class Parallelogram extends Figure
{
    private Point $firstPoint;
    private Point $secondPoint;
    private Point $thirdPoint;

    /**
     * @param int $x1
     * @param int $x1
     * @param int $x2
     * @param int $y2
     * @param int $x3
     * @param int $y3
     */
    public function __construct(int $x1, int $y1, int $x2, int $y2, int $x3, int $y3)
    {
        $this->firstPoint = new Point($x1, $y1);
        $this->secondPoint = new Point($x2, $y2);
        $this->thirdPoint = new Point($x3, $y3);
    }

    public function draw($colorCode): array
    {
        $parentResult = parent::draw($colorCode);
        $image = $parentResult['image'];
        $color = $parentResult['color'];
        $index = $parentResult['index'];

        //Built fourth point using other three points
        $minY = min($this->firstPoint->getY(), $this->secondPoint->getY(), $this->thirdPoint->getY());
        $x4 = 0;
        $y4 = 0;

        switch ($minY) {
            case $this->firstPoint->getY():
                $x4 = $this->firstPoint->getX() + abs($this->thirdPoint->getX() - $this->secondPoint->getX());
                $y4 = $this->firstPoint->getY() + abs($this->thirdPoint->getY() - $this->secondPoint->getY());
                break;

            case $this->secondPoint->getY():
                $x4 = $this->secondPoint->getX() + abs($this->thirdPoint->getX() - $this->firstPoint->getX());
                $y4 = $this->secondPoint->getY() + abs($this->thirdPoint->getY() - $this->secondPoint->getY());
                break;

            case $this->thirdPoint->getY():
                $x4 = $this->thirdPoint->getX() + abs($this->firstPoint->getX() - $this->secondPoint->getX());
                $y4 = $this->thirdPoint->getY() + abs($this->firstPoint->getY() - $this->secondPoint->getY());
                break;
        }

        //Draw parallelogram with two triangles
        imageopenpolygon(
            $image,
            [
                $this->firstPoint->getX(),
                $this->firstPoint->getY(),
                $x4,
                $y4,
                $this->thirdPoint->getX(),
                $this->thirdPoint->getY(),
            ],
            3,
            $color
        );


        imageopenpolygon(
            $image,
            [
                $this->firstPoint->getX(),
                $this->firstPoint->getY(),
                $this->secondPoint->getX(),
                $this->secondPoint->getY(),
                $this->thirdPoint->getX(),
                $this->thirdPoint->getY(),
            ],
            $color
        );

        imagepng($image, '/var/www/public/figures/image.png');

        chmod('/var/www/public/figures/image.png', octdec("0777"));
        session()->push('figure', 'parallelogram' . $index);
        header("location: /");
        return array();
    }
}
