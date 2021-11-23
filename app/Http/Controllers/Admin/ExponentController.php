<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyExponentRequest;
use App\Http\Requests\StoreExponentRequest;
use App\Http\Requests\UpdateExponentRequest;
use App\Models\Exponent;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ExponentController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('exponent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exponents = Exponent::with(['media'])->get();

        return view('admin.exponents.index', compact('exponents'));
    }

    public function create()
    {
        abort_if(Gate::denies('exponent_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exponents.create');
    }

    public function store(StoreExponentRequest $request)
    {
        $exponent = Exponent::create($request->all());

        if ($request->input('photo', false)) {
            $exponent->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $exponent->id]);
        }

        return redirect()->route('admin.exponents.index');
    }

    public function edit(Exponent $exponent)
    {
        abort_if(Gate::denies('exponent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exponents.edit', compact('exponent'));
    }

    public function update(UpdateExponentRequest $request, Exponent $exponent)
    {
        $exponent->update($request->all());

        if ($request->input('photo', false)) {
            if (!$exponent->photo || $request->input('photo') !== $exponent->photo->file_name) {
                if ($exponent->photo) {
                    $exponent->photo->delete();
                }
                $exponent->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($exponent->photo) {
            $exponent->photo->delete();
        }

        return redirect()->route('admin.exponents.index');
    }

    public function show(Exponent $exponent)
    {
        abort_if(Gate::denies('exponent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exponents.show', compact('exponent'));
    }

    public function destroy(Exponent $exponent)
    {
        abort_if(Gate::denies('exponent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exponent->delete();

        return back();
    }

    public function massDestroy(MassDestroyExponentRequest $request)
    {
        Exponent::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('exponent_create') && Gate::denies('exponent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Exponent();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
