<?php

namespace Modules\Neb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestrictionStoreRequest extends FormRequest
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
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'restriction_code' => 'required|unique:'.env('DB_DATABASE_NEB').'.restrictions,restriction_code|max:4',
            'restriction_description' => 'required|min:3',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
    }
}
