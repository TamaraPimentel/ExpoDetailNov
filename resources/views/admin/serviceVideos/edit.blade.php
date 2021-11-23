@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.serviceVideo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.service-videos.update", [$serviceVideo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="service_video_url">{{ trans('cruds.serviceVideo.fields.service_video_url') }}</label>
                <input class="form-control {{ $errors->has('service_video_url') ? 'is-invalid' : '' }}" type="text" name="service_video_url" id="service_video_url" value="{{ old('service_video_url', $serviceVideo->service_video_url) }}" required>
                @if($errors->has('service_video_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('service_video_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.serviceVideo.fields.service_video_url_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection