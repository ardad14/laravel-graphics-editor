<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FigureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // Point rules
            'pointXCoord' => 'required_if:type,point | min:0',
            'pointYCoord' => 'required_if:type,point | min:0',
            'pointColor' => 'required_if:type,point',

            //Section rules
            'sectionFirstXCoord' => 'required_if:type,section | min:0',
            'sectionFirstYCoord' => 'required_if:type,section | min:0',
            'sectionSecondXCoord' => 'required_if:type,section | min:0',
            'sectionSecondYCoord' => 'required_if:type,section | min:0',
            'sectionColor' => 'required_if:type,section',

            //Square rules
            'squareFirstXCoord' => 'required_if:type,square | min:0',
            'squareFirstYCoord' => 'required_if:type,square | min:0',
            'squareLength' => 'required_if:type,square | min:1',
            'squareColor' => 'required_if:type,square',

            //Rectangle rules
            'rectangleFirstXCoord' => 'required_if:type,rectangle | min:0',
            'rectangleFirstYCoord' => 'required_if:type,rectangle | min:0',
            'rectangleSecondXCoord' => 'required_if:type,rectangle | min:0',
            'rectangleSecondYCoord' => 'required_if:type,rectangle | min:0',
            'rectangleColor' => 'required_if:type,rectangle',

            //Parallelogram rules
            'parallelogramFirstXCoord' => 'required_if:type,parallelogram | min:0',
            'parallelogramFirstYCoord' => 'required_if:type,parallelogram | min:0',
            'parallelogramSecondXCoord' => 'required_if:type,parallelogram | min:0',
            'parallelogramSecondYCoord' => 'required_if:type,parallelogram | min:0',
            'parallelogramThirdXCoord' => 'required_if:type,parallelogram | min:0',
            'parallelogramThirdYCoord' => 'required_if:type,parallelogram | min:0',
            'parallelogramColor' => 'required_if:type,parallelogram',

            //Circle rules
            'circleXCoord' => 'required_if:type,circle | min:0',
            'circleYCoord' => 'required_if:type,circle | min:0',
            'circleRadius' => 'required_if:type,circle | min:1',
            'circleColor' => 'required_if:type,circle',

            //Ellipse rules
            'ellipseXCoord' => 'required_if:type,ellipse | min:0',
            'ellipseYCoord' => 'required_if:type,ellipse | min:0',
            'ellipseLongRadius' => 'required_if:type,ellipse | min:1',
            'ellipseShortRadius' => 'required_if:type,ellipse | min:1',
            'ellipseColor' => 'required_if:type,ellipse',

            //Triangle rules
            'triangleFirstXCoord' => 'required_if:type,triangle | min:0',
            'triangleFirstYCoord' => 'required_if:type,triangle | min:0',
            'triangleSecondXCoord' => 'required_if:type,triangle | min:0',
            'triangleSecondYCoord' => 'required_if:type,triangle | min:0',
            'triangleThirdXCoord' => 'required_if:type,triangle | min:0',
            'triangleThirdYCoord' => 'required_if:type,triangle | min:0',
            'triangleColor' => 'required_if:type,triangle',

            //Text rules
            'textXCoord' => 'required_if:type,text | min:0',
            'textYCoord' => 'required_if:type,text | min:0',
            'testSize' => 'required_if:type,text | min:5',
            'textColor' => 'required_if:type,text',
        ];
    }
}
