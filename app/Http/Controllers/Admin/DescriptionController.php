<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDescriptionRequest;
use App\Http\Requests\StoreDescriptionRequest;
use App\Http\Requests\UpdateDescriptionRequest;
use App\Models\Description;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DescriptionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('description_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $descriptions = Description::all();

        return view('admin.descriptions.index', compact('descriptions'));
    }

    public function create()
    {
        abort_if(Gate::denies('description_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.descriptions.create');
    }

    public function store(StoreDescriptionRequest $request)
    {
        $description = Description::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $description->id]);
        }

        return redirect()->route('admin.descriptions.index');
    }

    public function edit(Description $description)
    {
        abort_if(Gate::denies('description_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.descriptions.edit', compact('description'));
    }

    public function update(UpdateDescriptionRequest $request, Description $description)
    {
        $description->update($request->all());

        return redirect()->route('admin.descriptions.index');
    }

    public function show(Description $description)
    {
        abort_if(Gate::denies('description_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.descriptions.show', compact('description'));
    }

    public function destroy(Description $description)
    {
        abort_if(Gate::denies('description_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $description->delete();

        return back();
    }

    public function massDestroy(MassDestroyDescriptionRequest $request)
    {
        Description::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('description_create') && Gate::denies('description_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Description();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
