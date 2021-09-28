<?php

namespace App\Http\Controllers;

use App\Http\Requests\PointRequest;
use App\Models\Point;

class FigureController extends Controller
{
    public function dot(PointRequest $request)
    {
         $point = new Point($request->pointXCoord, $request->pointYCoord);
         $point->draw($request->pointColor);
    }
}
