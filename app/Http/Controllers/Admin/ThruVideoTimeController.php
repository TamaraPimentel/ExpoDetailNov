<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyThruVideoTimeRequest;
use App\Http\Requests\StoreThruVideoTimeRequest;
use App\Http\Requests\UpdateThruVideoTimeRequest;
use App\Models\ThruVideoTime;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThruVideoTimeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('thru_video_time_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $thruVideoTimes = ThruVideoTime::all();

        return view('admin.thruVideoTimes.index', compact('thruVideoTimes'));
    }

    public function create()
    {
        abort_if(Gate::denies('thru_video_time_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thruVideoTimes.create');
    }

    public function store(StoreThruVideoTimeRequest $request)
    {
        $thruVideoTime = ThruVideoTime::create($request->all());

        return redirect()->route('admin.thru-video-times.index');
    }

    public function edit(ThruVideoTime $thruVideoTime)
    {
        abort_if(Gate::denies('thru_video_time_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thruVideoTimes.edit', compact('thruVideoTime'));
    }

    public function update(UpdateThruVideoTimeRequest $request, ThruVideoTime $thruVideoTime)
    {
        $thruVideoTime->update($request->all());

        return redirect()->route('admin.thru-video-times.index');
    }

    public function show(ThruVideoTime $thruVideoTime)
    {
        abort_if(Gate::denies('thru_video_time_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.thruVideoTimes.show', compact('thruVideoTime'));
    }

    public function destroy(ThruVideoTime $thruVideoTime)
    {
        abort_if(Gate::denies('thru_video_time_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $thruVideoTime->delete();

        return back();
    }

    public function massDestroy(MassDestroyThruVideoTimeRequest $request)
    {
        ThruVideoTime::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
