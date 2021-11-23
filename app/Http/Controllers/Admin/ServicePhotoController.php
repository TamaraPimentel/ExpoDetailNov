<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyServicePhotoRequest;
use App\Http\Requests\StoreServicePhotoRequest;
use App\Http\Requests\UpdateServicePhotoRequest;
use App\Models\ServicePhoto;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ServicePhotoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('service_photo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $servicePhotos = ServicePhoto::with(['media'])->get();

        return view('admin.servicePhotos.index', compact('servicePhotos'));
    }

    public function create()
    {
        abort_if(Gate::denies('service_photo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.servicePhotos.create');
    }

    public function store(StoreServicePhotoRequest $request)
    {
        $servicePhoto = ServicePhoto::create($request->all());

        if ($request->input('photo', false)) {
            $servicePhoto->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $servicePhoto->id]);
        }

        return redirect()->route('admin.service-photos.index');
    }

    public function edit(ServicePhoto $servicePhoto)
    {
        abort_if(Gate::denies('service_photo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.servicePhotos.edit', compact('servicePhoto'));
    }

    public function update(UpdateServicePhotoRequest $request, ServicePhoto $servicePhoto)
    {
        $servicePhoto->update($request->all());

        if ($request->input('photo', false)) {
            if (!$servicePhoto->photo || $request->input('photo') !== $servicePhoto->photo->file_name) {
                if ($servicePhoto->photo) {
                    $servicePhoto->photo->delete();
                }
                $servicePhoto->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($servicePhoto->photo) {
            $servicePhoto->photo->delete();
        }

        return redirect()->route('admin.service-photos.index');
    }

    public function show(ServicePhoto $servicePhoto)
    {
        abort_if(Gate::denies('service_photo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.servicePhotos.show', compact('servicePhoto'));
    }

    public function destroy(ServicePhoto $servicePhoto)
    {
        abort_if(Gate::denies('service_photo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $servicePhoto->delete();

        return back();
    }

    public function massDestroy(MassDestroyServicePhotoRequest $request)
    {
        ServicePhoto::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('service_photo_create') && Gate::denies('service_photo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ServicePhoto();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
