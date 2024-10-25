<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'owner_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'count' => 'required',
            'status' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'user_id.required' => 'User ni to\'ldiring!',
            'user_id.exists' => 'User topilmadi!',
            'owner_id.required' => 'Owner ni to\'ldiring!',
            'owner_id.exists' => 'Owner topilmadi!',

            'product.required' => 'Product ni to\'ldiring!',
            'product_id.exists' => 'Product topilmadi!',

            'count.required' => 'Count topilmadi!',
            'status.required' => 'Status topilmadi!',

        ];
    }
}
