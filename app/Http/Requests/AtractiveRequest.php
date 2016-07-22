<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AtractiveRequest extends Request
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
            'name' => 'required',
            'region' => 'required',
            'province' => 'required',
            'district' => 'required',
            'category' => 'required',
            'type' => 'required',
            'sub_type' => 'required',
            'description' => 'required',
            'particularities' => 'required',
            'actual_state' => 'required',
            'observations' => 'required',
            'type_visits' => 'required',
            'land' => 'required',
            'aereal' => 'required',
            'maritime' => 'required',
            'name_image' => 'required',

        ];
    }
}
