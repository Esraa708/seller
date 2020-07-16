<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AddProductValidation extends FormRequest
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
    protected function prepareForValidation()
    {
    }
    public function rules()
    {
        $rules = [
            'name' =>  'required|max:255',
            'price' => 'required|integer',
            'brand' => 'required',
            'description' => 'required|max:400',
            'sku' => 'required', 'countery' => 'required',
            'quantity' =>  'required|integer',
            'basic_color' =>  'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'attrs' => 'required',
        ];
        foreach (json_decode($this->attrs) as $key => $value) {
            $attribute_val = $value->name;
            switch ($attribute_val) {
                case "matrial":
                    $rules['matrial'] = 'required';
                    break;
                case "weight":
                    $rules['weight'] = 'required|integer';
                    break;
                case "dimensions":
                    $rules['dimensions'] = 'required';
                    break;
            }
        }
        return $rules;
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            [
                'errors' => $validator->errors(),
                'status' => false
            ],
            400
        ));
    }
}
