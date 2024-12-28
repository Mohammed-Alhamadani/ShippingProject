<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'full_name'=>'sometimes|string|min:3|max:80',
            'email'=>'sometimes|string|email|max:80',
            'phone_number'=>'sometimes|string|max:80',
            'address'=>'sometimes|string|min:3|max:80',
            'country'=>'sometimes|string|min:3|max:80',
            'job_title'=>'sometimes|string|min:3|max:80',
            'profile_picture'=>'sometimes|string',
            'shipping_mark'=>'sometimes|string|min:3'
        ];
    }
}
