<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
                'name' => 'required|unique:products,name|string|max:255',
                'price' => 'required|numeric|min:0.01|decimal:2',
                'quantity' => 'required|integer|min:0',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The product name is required.',
            'name.unique' => 'The product name must be unique.',
            'name.string' => 'The product name must be a string.',
            'name.max' => 'The product name may not be greater than 255 characters.',
            'price.required' => 'The product price is required.',
            'price.numeric' => 'The product price must be a valid number.',
            'price.min' => 'The product price must be at least 0.01.',
            'quantity.required' => 'The product quantity is required.',
            'quantity.integer' => 'The product quantity must be an integer.',
            'quantity.min' => 'The product quantity must be at least 0.',
        ];
}
}
