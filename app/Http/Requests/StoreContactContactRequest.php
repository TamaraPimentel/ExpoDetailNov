<?php

namespace App\Http\Requests;

use App\Models\ContactContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContactContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_contact_create');
    }

    public function rules()
    {
        return [
            'logo' => [
                'required',
            ],
            'facebook_url' => [
                'string',
                'nullable',
            ],
            'instragram_url' => [
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
            'button_text' => [
                'string',
                'required',
            ],
            'button_url' => [
                'string',
                'required',
            ],
        ];
    }
}
