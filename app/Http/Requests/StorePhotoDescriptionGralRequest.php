<?php

namespace App\Http\Requests;

use App\Models\PhotoDescriptionGral;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePhotoDescriptionGralRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('photo_description_gral_create');
    }

    public function rules()
    {
        return [
            'photo' => [
                'required',
            ],
        ];
    }
}
