<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEnquiryRequest extends FormRequest
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
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'property_type'=>'required|numeric',
            'enquiry_message' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'enquiry_message.required' => 'Enquiry Message is required'
        ];
    }
}
