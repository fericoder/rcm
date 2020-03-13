<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Units extends FormRequest
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
            'fullName' => 'required|min:5|max:35',
            'tower' => 'required',
            'floor' => 'required',
            'unit' => 'required',
//            'code' => 'required',
//            'area' => 'required|min:0|max:2000',
//            'charge' => 'required|min:0|max:9999999',
//            'mobile' => 'required|digits:11',
            'phone1' => 'nullable',
            'userType' => 'required|in:superAdmin,admin,boardMember,user',
            'userStatus' => 'required|in:enable,disable',
            'propertyStatus' => 'required|in:resident,empty',
            'residentType' => 'required|in:owner,tenant',
            'email' => 'nullable|email',
            'avatar' => 'nullable',
        ];

    }
}
