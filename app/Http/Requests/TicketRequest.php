<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'title' => 'required|min:3|max:250',
            'description' => 'required|min:10|max:10000',
            'requestedFrom' => 'required',
            'scope' => 'required',
            'attachment' => 'nullable|mimes:jpg,jpeg,bmp,JPG,png,PNG,pdf,doc,docx,ppt,pptx,xls,xlsx,JPEG',
        ];
    }
}