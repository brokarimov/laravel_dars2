<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'count' => 'required|max:255',
            'image' => 'required|file|mimes:png,jpg,jpeg', // Ensure image is a file with specified mime types
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Name ni to\'ldiring!',
            'price.required' => 'Narx topilmadi!',
            'count.required' => 'Count topilmadi!',
            'image.required' => 'Rasmni to\'ldiring!',
            'image.mimes' => 'Rasmni faqat (png, jpg, jpeg) formatida yuboring!',
        ];
    }
}