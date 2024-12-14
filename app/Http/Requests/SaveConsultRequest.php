<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveConsultRequest extends FormRequest
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
            'name' =>'required',
            'phone' =>'required|max:10|min:10',
            'email' =>'required|email',
            'content' => 'required',
            'terms' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'phone.required' => 'Name is required',
            'content.required' => 'Message is required',
            'terms.required' => 'Please check terms and condition'
        ];
    }
}
