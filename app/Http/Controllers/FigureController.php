<?php

namespace App\Http\Controllers;

use App\Http\Requests\PointRequest;
use App\Models\Point;
use App\Http\Requests\SectionRequest;
use App\Models\Section;


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
}
