<?php

namespace App\Http\Requests;

use App\Models\Exponent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyExponentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('exponent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:exponents,id',
        ];
    }
}
