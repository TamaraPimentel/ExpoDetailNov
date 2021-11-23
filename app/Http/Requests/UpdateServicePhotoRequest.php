<?php

namespace App\Http\Requests;

use App\Models\ServicePhoto;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateServicePhotoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_photo_edit');
    }

    public function rules()
    {
        return [];
    }
}
