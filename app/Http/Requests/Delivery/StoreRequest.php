<?php

namespace App\Http\Requests\Delivery;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'customer_name' => 'required|string',
            'phone_number' => 'required|integer',
            'email' => 'required|email',
            'delivery_address' => 'required|string',
            'delivery_service' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Fill in the fields',
            '*.string' => 'Value must be string',
            '*.integer' => 'Value must be integer',
            'email.email' => 'Incorrect mail',
        ];
    }
}
