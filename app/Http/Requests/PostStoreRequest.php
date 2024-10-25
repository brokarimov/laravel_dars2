<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            // 'name' => 'required',

            'title' => 'required',
            'category_id' => 'required|exists:categories,id',
            'body' => 'required',
            'likes' => 'required',
            'dislikes' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg',
            // 'text' => 'required',

            // 'post_id' => 'required|exists:posts,id',
            // 'user_id' => 'required|exists:users,id',
            // 'is_active' => 'required',

            // 'owner_id' => 'required|exists:users,id',
            // 'product_id' => 'required|exists:products,id',
            // 'count' => 'required',
            // 'status' => 'required',

            // 'price' => 'required',
            // 'images' => 'required|file|mimes:png,jpg,jpeg',

            
        ];
    }

    public function messages()
    {
        return [
            

            'title.required' => 'Title ni to\'ldiring!',
            'category_id.required' => 'Category ni to\'ldiring!',
            'category_id.exists' => 'Category topilmadi!',
            'body.required' => 'Text ni to\'ldiring!',
            'likes.required' => 'Likes ni to\'ldiring!',
            'dislikes.required' => 'Dislikes ni to\'ldiring!',
            'image.required' => 'Rasmni to\'ldiring!',
            'image.mimes' => 'Rasmni faqat(png, jpg, jpeg) formaytida yuboring!',

            // 'post_id.required' => 'Post ni to\'ldiring!',
            // 'post_id.exists' => 'Post topilmadi!',
            
            // 'user_id.required' => 'User ni to\'ldiring!',
            // 'user_id.exists' => 'User topilmadi!',

            // 'is_active.required' => 'Status topilmadi!',

            // 'owner_id.required' => 'Owner ni to\'ldiring!',
            // 'owner_id.exists' => 'Owner topilmadi!',

            // 'product.required' => 'Product ni to\'ldiring!',
            // 'product_id.exists' => 'Product topilmadi!',

            // 'count.required' => 'Count topilmadi!',
            // 'status.required' => 'Status topilmadi!',
            // 'price.required' => 'Narx topilmadi!',

            // 'images.required' => 'Rasmni to\'ldiring!',
            // 'images.mimes' => 'Rasmni faqat(png, jpg, jpeg) formaytida yuboring!',

            





        ];
    }
}
