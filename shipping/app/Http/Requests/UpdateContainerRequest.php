<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContainerRequest extends FormRequest
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
            "title"=>'sometimes|string|max:100',
            "shipment_date"=>'sometimes|date',
            'arrival_date'=>'sometimes|date',
            'size'=>'sometimes|string',
            'cubic_volume'=>'sometimes|integer',
            'shipping_company'=>'sometimes|string',
            'container_number'=>'sometimes|string',
            'bill_number'=>'sometimes|string',
        ];
    }
}
