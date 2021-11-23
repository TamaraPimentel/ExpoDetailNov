<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCompanyQuestionRequest;
use App\Http\Requests\StoreCompanyQuestionRequest;
use App\Http\Requests\UpdateCompanyQuestionRequest;
use App\Models\CompanyQuestion;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CompanyQuestionsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('company_question_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyQuestions = CompanyQuestion::all();

        return view('admin.companyQuestions.index', compact('companyQuestions'));
    }

    public function create()
    {
        abort_if(Gate::denies('company_question_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyQuestions.create');
    }

    public function store(StoreCompanyQuestionRequest $request)
    {
        $companyQuestion = CompanyQuestion::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $companyQuestion->id]);
        }

        return redirect()->route('admin.company-questions.index');
    }

    public function edit(CompanyQuestion $companyQuestion)
    {
        abort_if(Gate::denies('company_question_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyQuestions.edit', compact('companyQuestion'));
    }

    public function update(UpdateCompanyQuestionRequest $request, CompanyQuestion $companyQuestion)
    {
        $companyQuestion->update($request->all());

        return redirect()->route('admin.company-questions.index');
    }

    public function show(CompanyQuestion $companyQuestion)
    {
        abort_if(Gate::denies('company_question_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companyQuestions.show', compact('companyQuestion'));
    }

    public function destroy(CompanyQuestion $companyQuestion)
    {
        abort_if(Gate::denies('company_question_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companyQuestion->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompanyQuestionRequest $request)
    {
        CompanyQuestion::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('company_question_create') && Gate::denies('company_question_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CompanyQuestion();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
