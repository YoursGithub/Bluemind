<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KycUpdateRequest extends FormRequest
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
            // Bank details
            'account_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'branch_name' => 'required|string|max:255',
            'ifsc_code' => 'required|string',

            // Aadhaar details
            'adhaar_number' => 'required|string',
            'adhaar_name' => 'required|string|max:255',
            'address' => 'required|string',
            'pin_code' => 'required|string',
            'adhaar_card_front' => 'image|mimes:jpeg,png,jpg| max:2048',
            'adhaar_card_back' => 'image|mimes:jpeg,png,jpg| max:2048',

            // PAN details
            'pan_number' => 'required|string',
            'pan_name' => 'required|string|max:255',
            'pan_card' => 'image |mimes:jpeg,png,jpg| max:2048',

            // Personal details
            'annual_income' => 'required|string|max:255',

            // Selfie
            'selfie' => 'image |mimes:jpeg,png,jpg| max:2048',

            // Nominee
            'nominee_name' => 'required|string|max:255',
            'nominee_phone' => 'required|string|max:255',
            'nominee_adhaar_number' => 'required|string|max:255',

            'nominee_adhaar_card_front' => 'image |mimes:jpeg,png,jpg| max:2048',
            'nominee_adhaar_card_back' => 'image |mimes:jpeg,png,jpg| max:2048',
            'nominee_selfie' => 'image |mimes:jpeg,png,jpg| max:2048',

            //payment_screenshot
            'payment_screenshot' => 'image |mimes:jpeg,png,jpg| max:2048',


        ];
    }
}
