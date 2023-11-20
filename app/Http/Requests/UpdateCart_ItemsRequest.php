<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCart_ItemsRequest extends FormRequest
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
        $method = $this->method();
        if($method == 'PUT'){
            return [
                'cart_id' => ['required', Rule::exists('carts', 'id')],
                'item_id' => ['required', Rule::exists('items', 'id')],
            ];
        }
        else
        {
            return [
                'cart_id' => ['sometimes','required', Rule::exists('items', 'id')],
                'item_id' => ['sometimes','required', Rule::exists('items', 'id')],
            ];    
        }
    }
}
