<?php

namespace App\Http\Requests;

use App\Models\PrivacyNotice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPrivacyNoticeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('privacy_notice_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:privacy_notices,id',
        ];
    }
}
