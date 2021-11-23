<?php

namespace App\Http\Requests;

use App\Models\CompanyQuestion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompanyQuestionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_question_create');
    }

    public function rules()
    {
        return [
            'statement' => [
                'string',
                'required',
            ],
            'meaning' => [
                'required',
            ],
        ];
    }
}
