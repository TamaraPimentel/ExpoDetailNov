<?php

namespace App\Http\Requests;

use App\Models\MademeAnExhibitor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMademeAnExhibitorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mademe_an_exhibitor_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
            ],
            'message' => [
                'required',
            ],
        ];
    }
}
