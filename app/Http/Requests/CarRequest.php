<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'plate_no'          =>  ['required', 'max:191', 'unique:cars'],
            'current_color'     =>  ['required', 'max:191'],
            'target_color'      =>  ['required', 'max:191'],
        ];
    }
}
