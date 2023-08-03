<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    // Bu negadir ishlamadi


    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'narx' => 'required|integer',
            'image' => 'required|image|image|max:5000'
        ];
    }
}
