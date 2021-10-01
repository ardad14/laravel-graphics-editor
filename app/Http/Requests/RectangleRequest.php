<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RectangleRequest extends FormRequest
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
            'rectangleFirstXCoord' => 'required | min:0',
            'rectangleFirstYCoord' => 'required | min:0',
            'rectangleSecondXCoord' => 'required | min:0',
            'rectangleSecondYCoord' => 'required | min:0',
            'rectangleColor' => 'required'
        ];
    }
}
