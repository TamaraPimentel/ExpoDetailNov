<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMademeAnExhibitorRequest;
use App\Http\Requests\StoreMademeAnExhibitorRequest;
use App\Http\Requests\UpdateMademeAnExhibitorRequest;
use App\Models\MademeAnExhibitor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MademeAnExhibitorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mademe_an_exhibitor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mademeAnExhibitors = MademeAnExhibitor::all();

        return view('admin.mademeAnExhibitors.index', compact('mademeAnExhibitors'));
    }

    public function create()
    {
        abort_if(Gate::denies('mademe_an_exhibitor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mademeAnExhibitors.create');
    }

    public function store(StoreMademeAnExhibitorRequest $request)
    {
        $mademeAnExhibitor = MademeAnExhibitor::create($request->all());

        return redirect()->route('admin.mademe-an-exhibitors.index');
    }

    public function edit(MademeAnExhibitor $mademeAnExhibitor)
    {
        abort_if(Gate::denies('mademe_an_exhibitor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mademeAnExhibitors.edit', compact('mademeAnExhibitor'));
    }

    public function update(UpdateMademeAnExhibitorRequest $request, MademeAnExhibitor $mademeAnExhibitor)
    {
        $mademeAnExhibitor->update($request->all());

        return redirect()->route('admin.mademe-an-exhibitors.index');
    }

    public function show(MademeAnExhibitor $mademeAnExhibitor)
    {
        abort_if(Gate::denies('mademe_an_exhibitor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mademeAnExhibitors.show', compact('mademeAnExhibitor'));
    }

    public function destroy(MademeAnExhibitor $mademeAnExhibitor)
    {
        abort_if(Gate::denies('mademe_an_exhibitor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mademeAnExhibitor->delete();

        return back();
    }

    public function massDestroy(MassDestroyMademeAnExhibitorRequest $request)
    {
        MademeAnExhibitor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
