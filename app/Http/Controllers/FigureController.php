<?php

namespace App\Http\Controllers;

use App\Http\Requests\PointRequest;
use App\Models\Point;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use App\Http\Requests\SquareRequest;
use App\Models\Square;
use Illuminate\Http\Request;


class FigureController extends Controller
{
    public function point(PointRequest $request)
    {
         $point = new Point($request->pointXCoord, $request->pointYCoord);
         $point->draw($request->pointColor);
    }

    public function section(SectionRequest $request)
    {
        $section = new Section(
            $request->sectionFirstXCoord,
            $request->sectionFirstYCoord,
            $request->sectionSecondXCoord,
            $request->sectionSecondYCoord
        );
        $section->draw($request->sectionColor);
    }

    public function square(SquareRequest $request)
    {
        $square = new Square(
            $request->squareFirstXCoord,
            $request->squareFirstYCoord,
            $request->squareLength
        );
        $square->draw($request->squareColor);
    }

    /*public function figure(PointRequest $request)
    {
        $figureType = preg_split('/(?<=[a-z])(?=[A-Z])/u',array_key_first($_GET));
        var_dump("point");
        switch ($figureType) {
            case 'point':

                $this->point($request);
                break;

        }
    }*/
}
