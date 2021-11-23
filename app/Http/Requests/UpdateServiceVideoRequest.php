<?php

namespace App\Http\Requests;

use App\Models\ServiceVideo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateServiceVideoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_video_edit');
    }

    public function rules()
    {
        return [
            'service_video_url' => [
                'string',
                'required',
            ],
        ];
    }
}
