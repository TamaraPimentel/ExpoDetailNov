<?php

namespace App\Http\Requests;

use App\Models\ThruVideoTime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreThruVideoTimeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('thru_video_time_create');
    }

    public function rules()
    {
        return [
            'video_url' => [
                'string',
                'required',
            ],
        ];
    }
}
