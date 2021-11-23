<?php

namespace App\Http\Requests;

use App\Models\ContactCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_company_edit');
    }

    public function rules()
    {
        return [
            'company_name' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'required',
            ],
            'company_email' => [
                'string',
                'nullable',
            ],
            'company_phone' => [
                'string',
                'required',
            ],
            'company_address' => [
                'string',
                'nullable',
            ],
            'facebook_url' => [
                'string',
                'nullable',
            ],
            'instagram_url' => [
                'string',
                'nullable',
            ],
            'youtube_url' => [
                'string',
                'nullable',
            ],
            'tiktok_url' => [
                'string',
                'nullable',
            ],
            'twitter_url' => [
                'string',
                'nullable',
            ],
            'other_url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
