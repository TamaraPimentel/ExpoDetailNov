@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.videoFaq.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.video-faqs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.videoFaq.fields.id') }}
                        </th>
                        <td>
                            {{ $videoFaq->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.videoFaq.fields.video_faqs') }}
                        </th>
                        <td>
                            {{ $videoFaq->video_faqs }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.videoFaq.fields.photo_faqs') }}
                        </th>
                        <td>
                            @if($videoFaq->photo_faqs)
                                <a href="{{ $videoFaq->photo_faqs->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $videoFaq->photo_faqs->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.video-faqs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection