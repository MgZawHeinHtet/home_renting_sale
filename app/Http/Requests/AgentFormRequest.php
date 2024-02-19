<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentFormRequest extends FormRequest
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
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','min:8'],
            'confirm-password'=>['min:8','same:password'],
            'company_name'=>['required'],
            'name'=>['required'],
            'address'=>['required'],
            'phone'=>['required'],
            'description'=>['required']
        ];
    }
}
