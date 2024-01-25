<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRentFormRequest extends FormRequest
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
            'title'=> ['required'],
            'region'=> ['required'],
            'township'=> ['required'],
            'category'=> ['required'],
            'price'=> ['required'],
            'people'=> ['required'],
            'map'=> ['required'],
            'area'=> ['required'],
            'area_unit'=> ['required'],
            'bathroom'=> ['required'],
            'bedroom'=> ['required'],
            'description'=> ['required','min:10'],
            
            'nearby'=>['required'],
            'check_in'=>['required'],
            'check_out'=>['required'],
        ];
    }
}
