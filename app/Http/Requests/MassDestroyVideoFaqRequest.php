<?php

namespace App\Http\Requests;

use App\Models\VideoFaq;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVideoFaqRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('video_faq_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:video_faqs,id',
        ];
    }
}
