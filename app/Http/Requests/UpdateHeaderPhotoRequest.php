<?php

namespace App\Http\Requests;

use App\Models\HeaderPhoto;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateHeaderPhotoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('header_photo_edit');
    }

    public function rules()
    {
        return [];
    }
}
