<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LikeStoreRequest extends FormRequest
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
            'post_id' => 'required|exists:posts,id',
            'user_id' => 'required|exists:users,id',
            'is_active' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'post_id.required' => 'Post ni to\'ldiring!',
            'post_id.exists' => 'Post topilmadi!',
            
            'user_id.required' => 'User ni to\'ldiring!',
            'user_id.exists' => 'User topilmadi!',

            'is_active.required' => 'Status topilmadi!',
        ];
    }
}
