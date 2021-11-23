<?php

namespace App\Http\Requests;

use App\Models\ExposerImage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExposerImageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exposer_image_edit');
    }

    public function rules()
    {
        return [];
    }
}
