<?php

namespace App\Http\Requests;

use App\Models\MademeAnExhibitor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMademeAnExhibitorRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mademe_an_exhibitor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:mademe_an_exhibitors,id',
        ];
    }
}
