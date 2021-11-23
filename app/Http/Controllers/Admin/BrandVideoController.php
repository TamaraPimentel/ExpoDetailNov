<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBrandVideoRequest;
use App\Http\Requests\StoreBrandVideoRequest;
use App\Http\Requests\UpdateBrandVideoRequest;
use App\Models\BrandVideo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BrandVideoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('brand_video_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brandVideos = BrandVideo::all();

        return view('admin.brandVideos.index', compact('brandVideos'));
    }

    public function create()
    {
        abort_if(Gate::denies('brand_video_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brandVideos.create');
    }

    public function store(StoreBrandVideoRequest $request)
    {
        $brandVideo = BrandVideo::create($request->all());

        return redirect()->route('admin.brand-videos.index');
    }

    public function edit(BrandVideo $brandVideo)
    {
        abort_if(Gate::denies('brand_video_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brandVideos.edit', compact('brandVideo'));
    }

    public function update(UpdateBrandVideoRequest $request, BrandVideo $brandVideo)
    {
        $brandVideo->update($request->all());

        return redirect()->route('admin.brand-videos.index');
    }

    public function show(BrandVideo $brandVideo)
    {
        abort_if(Gate::denies('brand_video_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brandVideos.show', compact('brandVideo'));
    }

    public function destroy(BrandVideo $brandVideo)
    {
        abort_if(Gate::denies('brand_video_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brandVideo->delete();

        return back();
    }

    public function massDestroy(MassDestroyBrandVideoRequest $request)
    {
        BrandVideo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
