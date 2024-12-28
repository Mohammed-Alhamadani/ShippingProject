<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
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
            'full_name'=>'required|string|min:3|max:80',
            'email'=>'required|string|email|max:80',
            'phone_number'=>'string|max:80',
            'address'=>'string|min:3|max:80',
            'country'=>'string|min:3|max:80',
            'job_title'=>'string|min:3|max:80',
            'profile_picture'=>'string',
            'shipping_mark'=>'string|min:3|max:100',

        ];
    }
}
