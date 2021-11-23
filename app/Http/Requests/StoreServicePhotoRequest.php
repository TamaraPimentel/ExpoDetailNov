<?php

namespace App\Http\Requests;

use App\Models\ServicePhoto;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreServicePhotoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_photo_create');
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
