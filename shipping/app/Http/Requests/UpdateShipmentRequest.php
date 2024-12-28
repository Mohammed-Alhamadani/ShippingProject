<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShipmentRequest extends FormRequest
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
            "uuid"=>'sometimes|string|max:100',
            "invoice_number"=>'sometimes|string|max:100',
            'handling_fee'=>'sometimes|numeric',
            'delivery_fee'=>'sometimes|numeric',
            'storage_fee'=>'sometimes|numeric',
            'internal_delivery_fee'=>'sometimes|numeric',
            'insurance_fee'=>'sometimes|numeric',
            'packaging_fee'=>'sometimes|numeric',
            'shipping_fee'=>'sometimes|numeric',
        ];
    }
}
