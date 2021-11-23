<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyServiceVideoRequest;
use App\Http\Requests\StoreServiceVideoRequest;
use App\Http\Requests\UpdateServiceVideoRequest;
use App\Models\ServiceVideo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceVideoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('service_video_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceVideos = ServiceVideo::all();

        return view('admin.serviceVideos.index', compact('serviceVideos'));
    }

    public function create()
    {
        abort_if(Gate::denies('service_video_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.serviceVideos.create');
    }

    public function store(StoreServiceVideoRequest $request)
    {
        $serviceVideo = ServiceVideo::create($request->all());

        return redirect()->route('admin.service-videos.index');
    }

    public function edit(ServiceVideo $serviceVideo)
    {
        abort_if(Gate::denies('service_video_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.serviceVideos.edit', compact('serviceVideo'));
    }

    public function update(UpdateServiceVideoRequest $request, ServiceVideo $serviceVideo)
    {
        $serviceVideo->update($request->all());

        return redirect()->route('admin.service-videos.index');
    }

    public function show(ServiceVideo $serviceVideo)
    {
        abort_if(Gate::denies('service_video_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.serviceVideos.show', compact('serviceVideo'));
    }

    public function destroy(ServiceVideo $serviceVideo)
    {
        abort_if(Gate::denies('service_video_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceVideo->delete();

        return back();
    }

    public function massDestroy(MassDestroyServiceVideoRequest $request)
    {
        ServiceVideo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
