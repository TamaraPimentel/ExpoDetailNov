<?php

namespace App\Http\Requests;

use App\Models\ExhibitorImage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExhibitorImageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exhibitor_image_edit');
    }

    public function rules()
    {
        return [];
    }
}
