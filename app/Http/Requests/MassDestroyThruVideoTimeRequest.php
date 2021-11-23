<?php

namespace App\Http\Requests;

use App\Models\ThruVideoTime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyThruVideoTimeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('thru_video_time_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:thru_video_times,id',
        ];
    }
}
