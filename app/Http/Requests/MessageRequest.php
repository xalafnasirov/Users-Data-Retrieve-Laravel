<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name'=> 'required | min:3',
            'email'=> 'required | email'
        ];
    }

    public function messages(): array 
    {

        return [
            'name.required'=>'The name must be filled',
            'email.required'=>'Please add your email address',
            'email.email'=>'Please add a valid email address',
        ];

    }
}
