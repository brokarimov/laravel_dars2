<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product2StoreRequest extends FormRequest
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

            'price' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg',
            'count' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name ni to\'ldiring!',

            'price.required' => 'Narx topilmadi!',
            'count.required' => 'Count topilmadi!',

            'image.required' => 'Rasmni to\'ldiring!',
            'image.mimes' => 'Rasmni faqat(png, jpg, jpeg) formaytida yuboring!',
        ];
    }

}
