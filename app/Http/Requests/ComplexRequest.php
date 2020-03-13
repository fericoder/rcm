<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComplexRequest extends FormRequest
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
            'units' => 'required|min:1|max:10000|integer',
            'address' => 'required|min:1|max:500',
            'type' => 'required|in:normal,multiBlock',
        ];
    }
}
