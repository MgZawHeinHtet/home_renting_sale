<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentProfileFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name'=>['required'],
            'name'=>['required',],
            'phone'=>['required'],
            'phone2'=>['string'],
            'phone3'=>['string'],
            'phone4'=>['string'],
            'location_map'=>['string'],
            'address'=>['required'],
            'facebook_link'=>['required'],
            'description'=>['required']
        ];
    }
}
