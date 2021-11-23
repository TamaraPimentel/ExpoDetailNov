<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCompanyVideoRequest;
use App\Http\Requests\StoreCompanyVideoRequest;
use App\Http\Requests\UpdateCompanyVideoRequest;
use App\Models\CompanyVideo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyVideoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('company_video_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyVideos = CompanyVideo::all();

        return view('admin.companyVideos.index', compact('companyVideos'));
    }

    public function create()
    {
        abort_if(Gate::denies('company_video_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyVideos.create');
    }

    public function store(StoreCompanyVideoRequest $request)
    {
        $companyVideo = CompanyVideo::create($request->all());

        return redirect()->route('admin.company-videos.index');
    }

    public function edit(CompanyVideo $companyVideo)
    {
        abort_if(Gate::denies('company_video_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyVideos.edit', compact('companyVideo'));
    }

    public function update(UpdateCompanyVideoRequest $request, CompanyVideo $companyVideo)
    {
        $companyVideo->update($request->all());

        return redirect()->route('admin.company-videos.index');
    }

    public function show(CompanyVideo $companyVideo)
    {
        abort_if(Gate::denies('company_video_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyVideos.show', compact('companyVideo'));
    }

    public function destroy(CompanyVideo $companyVideo)
    {
        abort_if(Gate::denies('company_video_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyVideo->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompanyVideoRequest $request)
    {
        CompanyVideo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
