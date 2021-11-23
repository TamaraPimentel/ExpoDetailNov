<?php

namespace App\Http\Requests;

use App\Models\Lecturer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLecturerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('lecturer_create');
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
            'topic' => [
                'string',
                'nullable',
            ],
        ];
    }
}
