<?php

namespace App\Http\Requests;

use App\Models\ExhibitorImage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreExhibitorImageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exhibitor_image_create');
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
