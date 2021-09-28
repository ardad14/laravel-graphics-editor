<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SquareRequest extends FormRequest
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
            'squareFirstXCoord' => 'required | min:0',
            'squareFirstYCoord' => 'required | min:0',
            'squareLength' => 'required | min:1',
            'squareColor' => 'required'
        ];
    }
}
