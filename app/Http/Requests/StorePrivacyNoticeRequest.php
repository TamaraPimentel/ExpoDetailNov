<?php

namespace App\Http\Requests;

use App\Models\PrivacyNotice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePrivacyNoticeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('privacy_notice_create');
    }

    public function rules()
    {
        return [];
    }
}
