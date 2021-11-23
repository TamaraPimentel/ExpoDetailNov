<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPhotoDescriptionGralRequest;
use App\Http\Requests\StorePhotoDescriptionGralRequest;
use App\Http\Requests\UpdatePhotoDescriptionGralRequest;
use App\Models\PhotoDescriptionGral;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PhotoDescriptionGralController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('photo_description_gral_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $photoDescriptionGrals = PhotoDescriptionGral::with(['media'])->get();

        return view('admin.photoDescriptionGrals.index', compact('photoDescriptionGrals'));
    }

    public function create()
    {
        abort_if(Gate::denies('photo_description_gral_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.photoDescriptionGrals.create');
    }

    public function store(StorePhotoDescriptionGralRequest $request)
    {
        $photoDescriptionGral = PhotoDescriptionGral::create($request->all());

        if ($request->input('photo', false)) {
            $photoDescriptionGral->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $photoDescriptionGral->id]);
        }

        return redirect()->route('admin.photo-description-grals.index');
    }

    public function edit(PhotoDescriptionGral $photoDescriptionGral)
    {
        abort_if(Gate::denies('photo_description_gral_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.photoDescriptionGrals.edit', compact('photoDescriptionGral'));
    }

    public function update(UpdatePhotoDescriptionGralRequest $request, PhotoDescriptionGral $photoDescriptionGral)
    {
        $photoDescriptionGral->update($request->all());

        if ($request->input('photo', false)) {
            if (!$photoDescriptionGral->photo || $request->input('photo') !== $photoDescriptionGral->photo->file_name) {
                if ($photoDescriptionGral->photo) {
                    $photoDescriptionGral->photo->delete();
                }
                $photoDescriptionGral->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($photoDescriptionGral->photo) {
            $photoDescriptionGral->photo->delete();
        }

        return redirect()->route('admin.photo-description-grals.index');
    }

    public function show(PhotoDescriptionGral $photoDescriptionGral)
    {
        abort_if(Gate::denies('photo_description_gral_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.photoDescriptionGrals.show', compact('photoDescriptionGral'));
    }

    public function destroy(PhotoDescriptionGral $photoDescriptionGral)
    {
        abort_if(Gate::denies('photo_description_gral_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $photoDescriptionGral->delete();

        return back();
    }

    public function massDestroy(MassDestroyPhotoDescriptionGralRequest $request)
    {
        PhotoDescriptionGral::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('photo_description_gral_create') && Gate::denies('photo_description_gral_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new PhotoDescriptionGral();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
