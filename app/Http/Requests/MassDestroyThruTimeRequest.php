<?php

namespace App\Http\Requests;

use App\Models\ThruTime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyThruTimeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('thru_time_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:thru_times,id',
        ];
    }
}
