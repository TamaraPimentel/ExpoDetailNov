<?php

namespace App\Http\Requests;

use App\Models\ScheduleImage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreScheduleImageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('schedule_image_create');
    }

    public function rules()
    {
        return [
            'date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'image.*' => [
                'required',
            ],
        ];
    }
}
