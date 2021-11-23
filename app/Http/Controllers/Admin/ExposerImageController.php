<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyExposerImageRequest;
use App\Http\Requests\StoreExposerImageRequest;
use App\Http\Requests\UpdateExposerImageRequest;
use App\Models\ExposerImage;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ExposerImageController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('exposer_image_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exposerImages = ExposerImage::with(['media'])->get();

        return view('admin.exposerImages.index', compact('exposerImages'));
    }

    public function create()
    {
        abort_if(Gate::denies('exposer_image_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exposerImages.create');
    }

    public function store(StoreExposerImageRequest $request)
    {
        $exposerImage = ExposerImage::create($request->all());

        if ($request->input('image', false)) {
            $exposerImage->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $exposerImage->id]);
        }

        return redirect()->route('admin.exposer-images.index');
    }

    public function edit(ExposerImage $exposerImage)
    {
        abort_if(Gate::denies('exposer_image_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exposerImages.edit', compact('exposerImage'));
    }

    public function update(UpdateExposerImageRequest $request, ExposerImage $exposerImage)
    {
        $exposerImage->update($request->all());

        if ($request->input('image', false)) {
            if (!$exposerImage->image || $request->input('image') !== $exposerImage->image->file_name) {
                if ($exposerImage->image) {
                    $exposerImage->image->delete();
                }
                $exposerImage->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($exposerImage->image) {
            $exposerImage->image->delete();
        }

        return redirect()->route('admin.exposer-images.index');
    }

    public function show(ExposerImage $exposerImage)
    {
        abort_if(Gate::denies('exposer_image_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exposerImages.show', compact('exposerImage'));
    }

    public function destroy(ExposerImage $exposerImage)
    {
        abort_if(Gate::denies('exposer_image_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exposerImage->delete();

        return back();
    }

    public function massDestroy(MassDestroyExposerImageRequest $request)
    {
        ExposerImage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('exposer_image_create') && Gate::denies('exposer_image_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ExposerImage();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
