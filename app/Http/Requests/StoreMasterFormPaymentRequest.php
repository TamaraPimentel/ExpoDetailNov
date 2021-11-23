<?php

namespace App\Http\Requests;

use App\Models\MasterFormPayment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMasterFormPaymentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('master_form_payment_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                
            ],
            'date' => [
               
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'price' => [
                'string',
               
              
            ],
            'email' => [
                'string',
               
            ],
        ];
    }
}
