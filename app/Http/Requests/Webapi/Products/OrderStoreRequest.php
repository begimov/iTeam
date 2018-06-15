<?php

namespace App\Http\Requests\Webapi\Products;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'product_id' => 'required|integer|exists:products,id',
            'price_tag_id' => 'sometimes|nullable|integer|exists:price_tags,id',
            'quantity' => 'sometimes|required|integer|min:1'
        ];
    }
}
