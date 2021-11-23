<?php

namespace App\Http\Requests;

use App\Models\Exponent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreExponentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exponent_create');
    }

    public function rules()
    {
        return [
            'photo' => [
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'topic' => [
                'string',
                'required',
            ],
            'date' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'curriculum' => [
                'required',
            ],
        ];
    }
}
