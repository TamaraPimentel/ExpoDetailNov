<?php

namespace App\Http\Requests;

use App\Models\ExposerImage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreExposerImageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exposer_image_create');
    }

    public function rules()
    {
        return [
            'image' => [
                'required',
            ],
        ];
    }
}
