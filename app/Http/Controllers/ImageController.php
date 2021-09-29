<?php

namespace App\Http\Controllers;

use App\Http\Requests\PointRequest;
use App\Http\Requests\RectangleRequest;
use App\Http\Services\ImageService;
use App\Models\Point;
use App\Http\Requests\SectionRequest;
use App\Models\Rectangle;
use App\Models\Section;
use App\Http\Requests\SquareRequest;
use App\Models\Square;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function draw()
    {
        ImageService::drawFigure($_REQUEST);
    }
}
