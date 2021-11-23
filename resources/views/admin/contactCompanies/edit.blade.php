@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.contactCompany.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contact-companies.update", [$contactCompany->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.contactCompany.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $contactCompany->company_name) }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="company_logo">{{ trans('cruds.contactCompany.fields.company_logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('company_logo') ? 'is-invalid' : '' }}" id="company_logo-dropzone">
                </div>
                @if($errors->has('company_logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.contactCompany.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $contactCompany->description) }}" required>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_email">{{ trans('cruds.contactCompany.fields.company_email') }}</label>
                <input class="form-control {{ $errors->has('company_email') ? 'is-invalid' : '' }}" type="text" name="company_email" id="company_email" value="{{ old('company_email', $contactCompany->company_email) }}">
                @if($errors->has('company_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="company_phone">{{ trans('cruds.contactCompany.fields.company_phone') }}</label>
                <input class="form-control {{ $errors->has('company_phone') ? 'is-invalid' : '' }}" type="text" name="company_phone" id="company_phone" value="{{ old('company_phone', $contactCompany->company_phone) }}" required>
                @if($errors->has('company_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.contactCompany.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', $contactCompany->company_address) }}">
                @if($errors->has('company_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook_url">{{ trans('cruds.contactCompany.fields.facebook_url') }}</label>
                <input class="form-control {{ $errors->has('facebook_url') ? 'is-invalid' : '' }}" type="text" name="facebook_url" id="facebook_url" value="{{ old('facebook_url', $contactCompany->facebook_url) }}">
                @if($errors->has('facebook_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.facebook_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instagram_url">{{ trans('cruds.contactCompany.fields.instagram_url') }}</label>
                <input class="form-control {{ $errors->has('instagram_url') ? 'is-invalid' : '' }}" type="text" name="instagram_url" id="instagram_url" value="{{ old('instagram_url', $contactCompany->instagram_url) }}">
                @if($errors->has('instagram_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instagram_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.instagram_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube_url">{{ trans('cruds.contactCompany.fields.youtube_url') }}</label>
                <input class="form-control {{ $errors->has('youtube_url') ? 'is-invalid' : '' }}" type="text" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', $contactCompany->youtube_url) }}">
                @if($errors->has('youtube_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.youtube_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tiktok_url">{{ trans('cruds.contactCompany.fields.tiktok_url') }}</label>
                <input class="form-control {{ $errors->has('tiktok_url') ? 'is-invalid' : '' }}" type="text" name="tiktok_url" id="tiktok_url" value="{{ old('tiktok_url', $contactCompany->tiktok_url) }}">
                @if($errors->has('tiktok_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tiktok_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.tiktok_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_url">{{ trans('cruds.contactCompany.fields.twitter_url') }}</label>
                <input class="form-control {{ $errors->has('twitter_url') ? 'is-invalid' : '' }}" type="text" name="twitter_url" id="twitter_url" value="{{ old('twitter_url', $contactCompany->twitter_url) }}">
                @if($errors->has('twitter_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.twitter_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_url">{{ trans('cruds.contactCompany.fields.other_url') }}</label>
                <input class="form-control {{ $errors->has('other_url') ? 'is-invalid' : '' }}" type="text" name="other_url" id="other_url" value="{{ old('other_url', $contactCompany->other_url) }}">
                @if($errors->has('other_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('other_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactCompany.fields.other_url_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.companyLogoDropzone = {
    url: '{{ route('admin.contact-companies.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="company_logo"]').remove()
      $('form').append('<input type="hidden" name="company_logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="company_logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($contactCompany) && $contactCompany->company_logo)
      var file = {!! json_encode($contactCompany->company_logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="company_logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection