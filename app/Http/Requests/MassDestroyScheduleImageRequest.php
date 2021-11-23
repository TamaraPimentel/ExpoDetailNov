<?php

namespace App\Http\Requests;

use App\Models\ScheduleImage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyScheduleImageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('schedule_image_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:schedule_images,id',
        ];
    }
}
