<?php

namespace App\Http\Requests;

use App\Models\MasterFormPayment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMasterFormPaymentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('master_form_payment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:master_form_payments,id',
        ];
    }
}
