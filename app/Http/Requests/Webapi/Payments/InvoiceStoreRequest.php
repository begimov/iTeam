<?php

namespace App\Http\Requests\Webapi\Payments;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company.name' => 'required|string|max:255',
            'company.business_entity_id' => 'required|numeric|exists:business_entities,id',
            'user.name' => 'required|string|max:255',
            'userProfile.phone' => 'required|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'company.name.required' => trans('validation.store-invoice-request.companyName.required'),
            'company.business_entity_id.required' => trans('validation.store-invoice-request.companyBusinessEntityId.required'),
            'user.name.required' => trans('validation.store-invoice-request.username.required'),
            'userProfile.phone.required' => trans('validation.store-invoice-request.userProfilePhone.required'),
        ];
    }
}
