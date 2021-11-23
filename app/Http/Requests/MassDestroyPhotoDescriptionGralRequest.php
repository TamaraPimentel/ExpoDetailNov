<?php

namespace App\Http\Requests;

use App\Models\PhotoDescriptionGral;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPhotoDescriptionGralRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('photo_description_gral_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:photo_description_grals,id',
        ];
    }
}
