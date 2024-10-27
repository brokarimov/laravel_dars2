<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'email' => 'required|max:255',
            'password' => 'required|max:20|min:8',
            'c_password' => 'required|same:password|max:20|min:8'

        ];
    }
    public function messages()
{
    return [
        'name.required' => 'Please fill in the Name field.',
        'email.required' => 'Email field is required.',
        'password.required' => 'Password field is required.',
        'password.min' => 'Password must be at least :min characters long.',
        'password.max' => 'Password must not exceed :max characters.',
        'c_password.required' => 'Confirmation Password field is required.',
        'c_password.min' => 'Confirmation Password must be at least :min characters long.',
        'c_password.max' => 'Confirmation Password must not exceed :max characters.'
    ];
}
}
