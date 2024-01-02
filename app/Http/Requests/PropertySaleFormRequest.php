<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PropertySaleFormRequest extends FormRequest
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
            'title' => ['required'],
            'type'=> ['required'],
            'floor'=>['required_if:type,apartment,mini condo,condo'],
            'price'=>['required'],
            'pricePerSqrt' => [''],
            'pricePerAcre' => [''],
            
            'areaType' => ['required'],
            'width'=>['required_if:areaType,l*w'],
            'length'=>['required_if:areaType,l*w'],
            'area'=>['required_if:areaType,au'],
            'areaUnit'=>['required_if:areaType,au'],
            'installment'=>['required'],
            'furnished'=>['required'],
            'bedroom'=>['required'],
            'bathroom'=>['required'],
            'region'=>['required'],
            'township'=>['required'],
            'phoneNumber'=>['required'],
            'description'=>['required'],
            'map'=>['required'],
            'location'=>['required_if:map,true']
        ];
    }
}
