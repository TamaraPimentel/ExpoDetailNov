<?php

namespace App\Http\Requests;

use App\Models\HeaderPhoto;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyHeaderPhotoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('header_photo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:header_photos,id',
        ];
    }
}
