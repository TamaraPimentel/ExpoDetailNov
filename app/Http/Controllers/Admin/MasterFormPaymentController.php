<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMasterFormPaymentRequest;
use App\Http\Requests\StoreMasterFormPaymentRequest;
use App\Http\Requests\UpdateMasterFormPaymentRequest;
use App\Models\Master;
use App\Models\MasterFormPayment;
use App\Models\RegistrationForm;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MasterFormPaymentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('master_form_payment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $masterFormPayments = MasterFormPayment::with(['buyer', 'conference'])->get();

        return view('admin.masterFormPayments.index', compact('masterFormPayments'));
    }

    public function create()
    {
        abort_if(Gate::denies('master_form_payment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $buyers = RegistrationForm::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $conferences = Master::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.masterFormPayments.create', compact('buyers', 'conferences'));
    }

    public function store(StoreMasterFormPaymentRequest $request)
    {
        $masterFormPayment = MasterFormPayment::create($request->all());

        return redirect()->route('admin.master-form-payments.index');
    }

    public function edit(MasterFormPayment $masterFormPayment)
    {
        abort_if(Gate::denies('master_form_payment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $buyers = RegistrationForm::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $conferences = Master::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $masterFormPayment->load('buyer', 'conference');

        return view('admin.masterFormPayments.edit', compact('buyers', 'conferences', 'masterFormPayment'));
    }

    public function update(UpdateMasterFormPaymentRequest $request, MasterFormPayment $masterFormPayment)
    {
        $masterFormPayment->update($request->all());

        return redirect()->route('admin.master-form-payments.index');
    }

    public function show(MasterFormPayment $masterFormPayment)
    {
        abort_if(Gate::denies('master_form_payment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $masterFormPayment->load('buyer', 'conference');

        return view('admin.masterFormPayments.show', compact('masterFormPayment'));
    }

    public function destroy(MasterFormPayment $masterFormPayment)
    {
        abort_if(Gate::denies('master_form_payment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $masterFormPayment->delete();

        return back();
    }

    public function massDestroy(MassDestroyMasterFormPaymentRequest $request)
    {
        MasterFormPayment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
