<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyRegistrationFormRequest;
use App\Http\Requests\StoreRegistrationFormRequest;
use App\Http\Requests\UpdateRegistrationFormRequest;
use App\Models\RegistrationForm;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;

class RegistrationFormController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('registration_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registrationForms = RegistrationForm::all();

        return view('admin.registrationForms.index', compact('registrationForms'));
    }

     public function enviarmail($id)
    {
        
        $registro = RegistrationForm::find($id);

         // email data fo user
        $email_data = array(
            'name' => $registro->name,
            'email' => $registro->email,
            'id' => $registro->id,
        );

        // send email with the template to user
        Mail::send('mails.boleto', $email_data, function ($message) use ($email_data) {
             $message->to($email_data['email'], $email_data['name'])
                ->subject('Tu boleto para el evento')
                ->from('noreply@expodetailmexico.com', 'Expo Detail Mexico');
        });

        $status = 'El mail se ha enviado exitosamente';

        return redirect()->back()->with(compact('status'));
    }

    public function create()
    {
        abort_if(Gate::denies('registration_form_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrationForms.create');
    }

    public function store(StoreRegistrationFormRequest $request)
    {
        $registrationForm = RegistrationForm::create($request->all());

        return redirect()->route('admin.registration-forms.index');
    }

    public function edit(RegistrationForm $registrationForm)
    {
        abort_if(Gate::denies('registration_form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrationForms.edit', compact('registrationForm'));
    }

    public function update(UpdateRegistrationFormRequest $request, RegistrationForm $registrationForm)
    {
        $registrationForm->update($request->all());

        return redirect()->route('admin.registration-forms.index');
    }

    public function show(RegistrationForm $registrationForm)
    {
        abort_if(Gate::denies('registration_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registrationForms.show', compact('registrationForm'));
    }

    public function destroy(RegistrationForm $registrationForm)
    {
        abort_if(Gate::denies('registration_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registrationForm->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegistrationFormRequest $request)
    {
        RegistrationForm::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
