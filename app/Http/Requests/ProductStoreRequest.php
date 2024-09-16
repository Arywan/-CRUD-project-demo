<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'detail' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'pls my dear client do not leave user name  filed empty ',
            'detail.required' => 'pls inform us with the  detail of this product',
        ];
    }
}
