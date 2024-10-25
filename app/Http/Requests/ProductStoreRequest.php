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
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'price' => 'required',
            'images' => 'required|file|mimes:png,jpg,jpeg',
            'count' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name ni to\'ldiring!',
            'category_id.required' => 'Category ni to\'ldiring!',
            'category_id.exists' => 'Category topilmadi!',
            'user_id.required' => 'User ni to\'ldiring!',
            'user_id.exists' => 'User topilmadi!',
            'price.required' => 'Narx topilmadi!',
            'count.required' => 'Count topilmadi!',

            'images.required' => 'Rasmni to\'ldiring!',
            'images.mimes' => 'Rasmni faqat(png, jpg, jpeg) formaytida yuboring!',
        ];
    }
}
