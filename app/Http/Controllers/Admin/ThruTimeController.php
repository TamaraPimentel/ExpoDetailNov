<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyThruTimeRequest;
use App\Http\Requests\StoreThruTimeRequest;
use App\Http\Requests\UpdateThruTimeRequest;
use App\Models\ThruTime;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ThruTimeController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('thru_time_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $thruTimes = ThruTime::with(['media'])->get();

        return view('admin.thruTimes.index', compact('thruTimes'));
    }

    public function create()
    {
        abort_if(Gate::denies('thru_time_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thruTimes.create');
    }

    public function store(StoreThruTimeRequest $request)
    {
        $thruTime = ThruTime::create($request->all());

        if ($request->input('icon', false)) {
            $thruTime->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $thruTime->id]);
        }

        return redirect()->route('admin.thru-times.index');
    }

    public function edit(ThruTime $thruTime)
    {
        abort_if(Gate::denies('thru_time_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thruTimes.edit', compact('thruTime'));
    }

    public function update(UpdateThruTimeRequest $request, ThruTime $thruTime)
    {
        $thruTime->update($request->all());

        if ($request->input('icon', false)) {
            if (!$thruTime->icon || $request->input('icon') !== $thruTime->icon->file_name) {
                if ($thruTime->icon) {
                    $thruTime->icon->delete();
                }
                $thruTime->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
            }
        } elseif ($thruTime->icon) {
            $thruTime->icon->delete();
        }

        return redirect()->route('admin.thru-times.index');
    }

    public function show(ThruTime $thruTime)
    {
        abort_if(Gate::denies('thru_time_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thruTimes.show', compact('thruTime'));
    }

    public function destroy(ThruTime $thruTime)
    {
        abort_if(Gate::denies('thru_time_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $thruTime->delete();

        return back();
    }

    public function massDestroy(MassDestroyThruTimeRequest $request)
    {
        ThruTime::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('thru_time_create') && Gate::denies('thru_time_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ThruTime();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
