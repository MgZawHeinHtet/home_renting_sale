<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsFormRequest extends FormRequest
{
    public $isUpdate;
    public function __construct()
    {
        $this->isUpdate = str_contains(request()->url(), 'update');
        
    }
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
            'title'=>['required'],
            'photo'=>[!$this->isUpdate ? '' : 'required'],
            'description'=>['required'],
            'isPosted'=>['required']
        ];
    }
}
