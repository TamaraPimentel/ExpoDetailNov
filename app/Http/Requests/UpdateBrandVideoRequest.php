<?php

namespace App\Http\Requests;

use App\Models\BrandVideo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBrandVideoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('brand_video_edit');
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
