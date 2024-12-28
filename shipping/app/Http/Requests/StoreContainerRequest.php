<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContainerRequest extends FormRequest
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
            "title"=>'required|string|max:100',
            "shipment_date"=>'date',
            'arrival_date'=>'date',
            'size'=>'string',
            'cubic_volume'=>'integer',
            'shipping_company'=>'string',
            'container_number'=>'string',
            'bill_number'=>'string',
        ];
    }
}
