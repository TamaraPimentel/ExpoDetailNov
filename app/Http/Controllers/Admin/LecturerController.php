<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLecturerRequest;
use App\Http\Requests\StoreLecturerRequest;
use App\Http\Requests\UpdateLecturerRequest;
use App\Models\Lecturer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LecturerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('lecturer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lecturers = Lecturer::all();

        return view('admin.lecturers.index', compact('lecturers'));
    }

    public function create()
    {
        abort_if(Gate::denies('lecturer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.lecturers.create');
    }

    public function store(StoreLecturerRequest $request)
    {
        $lecturer = Lecturer::create($request->all());

        return redirect()->route('admin.lecturers.index');
    }

    public function edit(Lecturer $lecturer)
    {
        abort_if(Gate::denies('lecturer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.lecturers.edit', compact('lecturer'));
    }

    public function update(UpdateLecturerRequest $request, Lecturer $lecturer)
    {
        $lecturer->update($request->all());

        return redirect()->route('admin.lecturers.index');
    }

    public function show(Lecturer $lecturer)
    {
        abort_if(Gate::denies('lecturer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.lecturers.show', compact('lecturer'));
    }

    public function destroy(Lecturer $lecturer)
    {
        abort_if(Gate::denies('lecturer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lecturer->delete();

        return back();
    }

    public function massDestroy(MassDestroyLecturerRequest $request)
    {
        Lecturer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
