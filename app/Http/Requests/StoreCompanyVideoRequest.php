<?php

namespace App\Http\Requests;

use App\Models\CompanyVideo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompanyVideoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_video_create');
    }

    public function rules()
    {
        return [
            'video_company_url' => [
                'string',
                'required',
            ],
        ];
    }
}
