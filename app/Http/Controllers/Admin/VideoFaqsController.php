<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyVideoFaqRequest;
use App\Http\Requests\StoreVideoFaqRequest;
use App\Http\Requests\UpdateVideoFaqRequest;
use App\Models\VideoFaq;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class VideoFaqsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('video_faq_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $videoFaqs = VideoFaq::with(['media'])->get();

        return view('admin.videoFaqs.index', compact('videoFaqs'));
    }

    public function create()
    {
        abort_if(Gate::denies('video_faq_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.videoFaqs.create');
    }

    public function store(StoreVideoFaqRequest $request)
    {
        $videoFaq = VideoFaq::create($request->all());

        if ($request->input('photo_faqs', false)) {
            $videoFaq->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo_faqs'))))->toMediaCollection('photo_faqs');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $videoFaq->id]);
        }

        return redirect()->route('admin.video-faqs.index');
    }

    public function edit(VideoFaq $videoFaq)
    {
        abort_if(Gate::denies('video_faq_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.videoFaqs.edit', compact('videoFaq'));
    }

    public function update(UpdateVideoFaqRequest $request, VideoFaq $videoFaq)
    {
        $videoFaq->update($request->all());

        if ($request->input('photo_faqs', false)) {
            if (!$videoFaq->photo_faqs || $request->input('photo_faqs') !== $videoFaq->photo_faqs->file_name) {
                if ($videoFaq->photo_faqs) {
                    $videoFaq->photo_faqs->delete();
                }
                $videoFaq->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo_faqs'))))->toMediaCollection('photo_faqs');
            }
        } elseif ($videoFaq->photo_faqs) {
            $videoFaq->photo_faqs->delete();
        }

        return redirect()->route('admin.video-faqs.index');
    }

    public function show(VideoFaq $videoFaq)
    {
        abort_if(Gate::denies('video_faq_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.videoFaqs.show', compact('videoFaq'));
    }

    public function destroy(VideoFaq $videoFaq)
    {
        abort_if(Gate::denies('video_faq_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $videoFaq->delete();

        return back();
    }

    public function massDestroy(MassDestroyVideoFaqRequest $request)
    {
        VideoFaq::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('video_faq_create') && Gate::denies('video_faq_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new VideoFaq();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
