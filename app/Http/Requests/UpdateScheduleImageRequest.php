<?php

namespace App\Http\Requests;

use App\Models\ScheduleImage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateScheduleImageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('schedule_image_edit');
    }

    public function rules()
    {
        return [
            'date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}
