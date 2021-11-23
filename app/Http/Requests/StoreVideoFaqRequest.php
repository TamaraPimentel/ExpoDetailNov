<?php

namespace App\Http\Requests;

use App\Models\VideoFaq;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVideoFaqRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('video_faq_create');
    }

    public function rules()
    {
        return [
            'video_faqs' => [
                'string',
                'nullable',
            ],
        ];
    }
}
