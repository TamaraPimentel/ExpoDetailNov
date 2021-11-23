<?php

namespace App\Http\Requests;

use App\Models\RegistrationForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRegistrationFormRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('registration_form_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
            ],
            'company' => [
                'string',
                'required',
            ],
            'position' => [
                'string',
                'nullable',
            ],
            'link' => [
                'required',
            ],
        ];
    }
}
