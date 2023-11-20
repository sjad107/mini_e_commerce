<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateItemsRequest extends FormRequest
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
                //
                'name' => ['required'],
                'price' => ['required','decimal:2', 'min:0'],
                'quantity' => ['required','integer', 'min:0'],
                'category_id' => ['required', 'integer', Rule::exists('categories', 'id'), ]  
            ];
    }
        else{
            return [
                'name' => ['sometimes', 'required'],
                'price' => ['sometimes','required','decimal:2', 'min:0'],
                'quantity' => ['sometimes','required','integer', 'min:0'],
                'category_id' => ['sometimes','required', 'integer', Rule::exists('categories', 'id'), ]  
            ];
        }
    }
}
