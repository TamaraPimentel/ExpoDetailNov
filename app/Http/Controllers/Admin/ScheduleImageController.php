<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyScheduleImageRequest;
use App\Http\Requests\StoreScheduleImageRequest;
use App\Http\Requests\UpdateScheduleImageRequest;
use App\Models\ScheduleImage;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ScheduleImageController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('schedule_image_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scheduleImages = ScheduleImage::with(['media'])->get();

        return view('admin.scheduleImages.index', compact('scheduleImages'));
    }

    public function create()
    {
        abort_if(Gate::denies('schedule_image_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scheduleImages.create');
    }

    public function store(StoreScheduleImageRequest $request)
    {
        $scheduleImage = ScheduleImage::create($request->all());

        foreach ($request->input('image', []) as $file) {
            $scheduleImage->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $scheduleImage->id]);
        }

        return redirect()->route('admin.schedule-images.index');
    }

    public function edit(ScheduleImage $scheduleImage)
    {
        abort_if(Gate::denies('schedule_image_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scheduleImages.edit', compact('scheduleImage'));
    }

    public function update(UpdateScheduleImageRequest $request, ScheduleImage $scheduleImage)
    {
        $scheduleImage->update($request->all());

        if (count($scheduleImage->image) > 0) {
            foreach ($scheduleImage->image as $media) {
                if (!in_array($media->file_name, $request->input('image', []))) {
                    $media->delete();
                }
            }
        }
        $media = $scheduleImage->image->pluck('file_name')->toArray();
        foreach ($request->input('image', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $scheduleImage->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('image');
            }
        }

        return redirect()->route('admin.schedule-images.index');
    }

    public function show(ScheduleImage $scheduleImage)
    {
        abort_if(Gate::denies('schedule_image_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.scheduleImages.show', compact('scheduleImage'));
    }

    public function destroy(ScheduleImage $scheduleImage)
    {
        abort_if(Gate::denies('schedule_image_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scheduleImage->delete();

        return back();
    }

    public function massDestroy(MassDestroyScheduleImageRequest $request)
    {
        ScheduleImage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('schedule_image_create') && Gate::denies('schedule_image_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ScheduleImage();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
