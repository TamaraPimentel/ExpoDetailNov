@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.companyVideo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.company-videos.update", [$companyVideo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="video_company_url">{{ trans('cruds.companyVideo.fields.video_company_url') }}</label>
                <input class="form-control {{ $errors->has('video_company_url') ? 'is-invalid' : '' }}" type="text" name="video_company_url" id="video_company_url" value="{{ old('video_company_url', $companyVideo->video_company_url) }}" required>
                @if($errors->has('video_company_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('video_company_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.companyVideo.fields.video_company_url_helper') }}</span>
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