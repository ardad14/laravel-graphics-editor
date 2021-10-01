<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
            'sectionFirstXCoord' => 'required | min:0',
            'sectionFirstYCoord' => 'required | min:0',
            'sectionSecondXCoord' => 'required | min:0',
            'sectionSecondYCoord' => 'required | min:0',
            'sectionColor' => 'required'
        ];
    }
}
