<?php

namespace App\Http\Requests;

use App\Models\Sponsor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSponsorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sponsor_create');
    }

    public function rules()
    {
        return [
            'logo' => [
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'web_url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
