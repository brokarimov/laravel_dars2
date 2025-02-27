<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name ni to\'ldiring!',
            
            'user_id.required' => 'User ni to\'ldiring!',
            'user_id.exists' => 'User topilmadi!',
            

            
        ];
    }
}
