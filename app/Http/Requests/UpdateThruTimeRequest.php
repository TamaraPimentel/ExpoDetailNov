<?php

namespace App\Http\Requests;

use App\Models\ThruTime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateThruTimeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('thru_time_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
