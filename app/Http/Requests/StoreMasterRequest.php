<?php

namespace App\Http\Requests;

use App\Models\Master;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMasterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('master_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'date' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'price' => [
                'string',
                'required',
            ],
            'topic' => [
                'string',
                'nullable',
            ],
            'owner_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
