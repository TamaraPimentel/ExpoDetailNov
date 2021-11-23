<?php

namespace App\Http\Requests;

use App\Models\ExposerImage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyExposerImageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('exposer_image_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:exposer_images,id',
        ];
    }
}
