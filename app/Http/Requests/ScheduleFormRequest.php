<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleFormRequest extends FormRequest
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
            'viewType'=>['required'],
            'date'=> ['required'],
            'time'=>['required'],
            'name'=>['required'],
            'phone'=>['required','min:9'],
            'email'=>['required','email'],
            'message'=>['required'],
            'agent_id'=>['required']
        ];
    }
}
