<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCartsRequest extends FormRequest
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
        if($method == 'PUT')
        {
            return [
                'customer_id' => ['required', Rule::exists('customers', 'id'), ],
            ];
        }
        else{
            return [
                'customer_id' => ['sometimes','required', Rule::exists('customers', 'id')]
            ];
        }
    }
}
