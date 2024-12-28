<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShipmentRequest extends FormRequest
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
            "uuid"=>'required|string|max:100',
            "invoice_number"=>'required|string|max:100',
            'handling_fee'=>'numeric',
            'delivery_fee'=>'numeric',
            'storage_fee'=>'numeric',
            'internal_delivery_fee'=>'numeric',
            'insurance_fee'=>'numeric',
            'packaging_fee'=>'numeric',
            'shipping_fee'=>'numeric',
        ];
    }
}
