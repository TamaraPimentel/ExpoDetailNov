<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyHeaderPhotoRequest;
use App\Http\Requests\StoreHeaderPhotoRequest;
use App\Http\Requests\UpdateHeaderPhotoRequest;
use App\Models\HeaderPhoto;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class HeaderPhotoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('header_photo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $headerPhotos = HeaderPhoto::with(['media'])->get();

        return view('admin.headerPhotos.index', compact('headerPhotos'));
    }

    public function create()
    {
        abort_if(Gate::denies('header_photo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.headerPhotos.create');
    }

    public function store(StoreHeaderPhotoRequest $request)
    {
        $headerPhoto = HeaderPhoto::create($request->all());

        if ($request->input('upper_photo', false)) {
            $headerPhoto->addMedia(storage_path('tmp/uploads/' . basename($request->input('upper_photo'))))->toMediaCollection('upper_photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $headerPhoto->id]);
        }

        return redirect()->route('admin.header-photos.index');
    }

    public function edit(HeaderPhoto $headerPhoto)
    {
        abort_if(Gate::denies('header_photo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.headerPhotos.edit', compact('headerPhoto'));
    }

    public function update(UpdateHeaderPhotoRequest $request, HeaderPhoto $headerPhoto)
    {
        $headerPhoto->update($request->all());

        if ($request->input('upper_photo', false)) {
            if (!$headerPhoto->upper_photo || $request->input('upper_photo') !== $headerPhoto->upper_photo->file_name) {
                if ($headerPhoto->upper_photo) {
                    $headerPhoto->upper_photo->delete();
                }
                $headerPhoto->addMedia(storage_path('tmp/uploads/' . basename($request->input('upper_photo'))))->toMediaCollection('upper_photo');
            }
        } elseif ($headerPhoto->upper_photo) {
            $headerPhoto->upper_photo->delete();
        }

        return redirect()->route('admin.header-photos.index');
    }

    public function show(HeaderPhoto $headerPhoto)
    {
        abort_if(Gate::denies('header_photo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.headerPhotos.show', compact('headerPhoto'));
    }

    public function destroy(HeaderPhoto $headerPhoto)
    {
        abort_if(Gate::denies('header_photo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $headerPhoto->delete();

        return back();
    }

    public function massDestroy(MassDestroyHeaderPhotoRequest $request)
    {
        HeaderPhoto::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('header_photo_create') && Gate::denies('header_photo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new HeaderPhoto();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
