<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyExhibitorImageRequest;
use App\Http\Requests\StoreExhibitorImageRequest;
use App\Http\Requests\UpdateExhibitorImageRequest;
use App\Models\ExhibitorImage;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ExhibitorImageController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('exhibitor_image_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitorImages = ExhibitorImage::with(['media'])->get();

        return view('admin.exhibitorImages.index', compact('exhibitorImages'));
    }

    public function create()
    {
        abort_if(Gate::denies('exhibitor_image_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exhibitorImages.create');
    }

    public function store(StoreExhibitorImageRequest $request)
    {
        $exhibitorImage = ExhibitorImage::create($request->all());

        if ($request->input('photo', false)) {
            $exhibitorImage->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $exhibitorImage->id]);
        }

        return redirect()->route('admin.exhibitor-images.index');
    }

    public function edit(ExhibitorImage $exhibitorImage)
    {
        abort_if(Gate::denies('exhibitor_image_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exhibitorImages.edit', compact('exhibitorImage'));
    }

    public function update(UpdateExhibitorImageRequest $request, ExhibitorImage $exhibitorImage)
    {
        $exhibitorImage->update($request->all());

        if ($request->input('photo', false)) {
            if (!$exhibitorImage->photo || $request->input('photo') !== $exhibitorImage->photo->file_name) {
                if ($exhibitorImage->photo) {
                    $exhibitorImage->photo->delete();
                }
                $exhibitorImage->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($exhibitorImage->photo) {
            $exhibitorImage->photo->delete();
        }

        return redirect()->route('admin.exhibitor-images.index');
    }

    public function show(ExhibitorImage $exhibitorImage)
    {
        abort_if(Gate::denies('exhibitor_image_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exhibitorImages.show', compact('exhibitorImage'));
    }

    public function destroy(ExhibitorImage $exhibitorImage)
    {
        abort_if(Gate::denies('exhibitor_image_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitorImage->delete();

        return back();
    }

    public function massDestroy(MassDestroyExhibitorImageRequest $request)
    {
        ExhibitorImage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('exhibitor_image_create') && Gate::denies('exhibitor_image_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ExhibitorImage();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
