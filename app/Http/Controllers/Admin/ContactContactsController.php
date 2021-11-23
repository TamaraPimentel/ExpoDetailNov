<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyContactContactRequest;
use App\Http\Requests\StoreContactContactRequest;
use App\Http\Requests\UpdateContactContactRequest;
use App\Models\ContactContact;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ContactContactsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('contact_contact_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactContacts = ContactContact::with(['media'])->get();

        return view('admin.contactContacts.index', compact('contactContacts'));
    }

    public function create()
    {
        abort_if(Gate::denies('contact_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactContacts.create');
    }

    public function store(StoreContactContactRequest $request)
    {
        $contactContact = ContactContact::create($request->all());

        if ($request->input('logo', false)) {
            $contactContact->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $contactContact->id]);
        }

        return redirect()->route('admin.contact-contacts.index');
    }

    public function edit(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactContacts.edit', compact('contactContact'));
    }

    public function update(UpdateContactContactRequest $request, ContactContact $contactContact)
    {
        $contactContact->update($request->all());

        if ($request->input('logo', false)) {
            if (!$contactContact->logo || $request->input('logo') !== $contactContact->logo->file_name) {
                if ($contactContact->logo) {
                    $contactContact->logo->delete();
                }
                $contactContact->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($contactContact->logo) {
            $contactContact->logo->delete();
        }

        return redirect()->route('admin.contact-contacts.index');
    }

    public function show(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactContacts.show', compact('contactContact'));
    }

    public function destroy(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactContact->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactContactRequest $request)
    {
        ContactContact::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('contact_contact_create') && Gate::denies('contact_contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ContactContact();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
