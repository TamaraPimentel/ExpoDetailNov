<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPrivacyNoticeRequest;
use App\Http\Requests\StorePrivacyNoticeRequest;
use App\Http\Requests\UpdatePrivacyNoticeRequest;
use App\Models\PrivacyNotice;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PrivacyNoticeController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('privacy_notice_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $privacyNotices = PrivacyNotice::all();

        return view('admin.privacyNotices.index', compact('privacyNotices'));
    }

    public function create()
    {
        abort_if(Gate::denies('privacy_notice_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.privacyNotices.create');
    }

    public function store(StorePrivacyNoticeRequest $request)
    {
        $privacyNotice = PrivacyNotice::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $privacyNotice->id]);
        }

        return redirect()->route('admin.privacy-notices.index');
    }

    public function edit(PrivacyNotice $privacyNotice)
    {
        abort_if(Gate::denies('privacy_notice_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.privacyNotices.edit', compact('privacyNotice'));
    }

    public function update(UpdatePrivacyNoticeRequest $request, PrivacyNotice $privacyNotice)
    {
        $privacyNotice->update($request->all());

        return redirect()->route('admin.privacy-notices.index');
    }

    public function show(PrivacyNotice $privacyNotice)
    {
        abort_if(Gate::denies('privacy_notice_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.privacyNotices.show', compact('privacyNotice'));
    }

    public function destroy(PrivacyNotice $privacyNotice)
    {
        abort_if(Gate::denies('privacy_notice_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $privacyNotice->delete();

        return back();
    }

    public function massDestroy(MassDestroyPrivacyNoticeRequest $request)
    {
        PrivacyNotice::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('privacy_notice_create') && Gate::denies('privacy_notice_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new PrivacyNotice();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
