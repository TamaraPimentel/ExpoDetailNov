@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contactContact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contact-contacts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="logo">{{ trans('cruds.contactContact.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook_url">{{ trans('cruds.contactContact.fields.facebook_url') }}</label>
                <input class="form-control {{ $errors->has('facebook_url') ? 'is-invalid' : '' }}" type="text" name="facebook_url" id="facebook_url" value="{{ old('facebook_url', '') }}">
                @if($errors->has('facebook_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.facebook_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instragram_url">{{ trans('cruds.contactContact.fields.instragram_url') }}</label>
                <input class="form-control {{ $errors->has('instragram_url') ? 'is-invalid' : '' }}" type="text" name="instragram_url" id="instragram_url" value="{{ old('instragram_url', '') }}">
                @if($errors->has('instragram_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instragram_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.instragram_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube_url">{{ trans('cruds.contactContact.fields.youtube_url') }}</label>
                <input class="form-control {{ $errors->has('youtube_url') ? 'is-invalid' : '' }}" type="text" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', '') }}">
                @if($errors->has('youtube_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.youtube_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tiktok_url">{{ trans('cruds.contactContact.fields.tiktok_url') }}</label>
                <input class="form-control {{ $errors->has('tiktok_url') ? 'is-invalid' : '' }}" type="text" name="tiktok_url" id="tiktok_url" value="{{ old('tiktok_url', '') }}">
                @if($errors->has('tiktok_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tiktok_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.tiktok_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_url">{{ trans('cruds.contactContact.fields.twitter_url') }}</label>
                <input class="form-control {{ $errors->has('twitter_url') ? 'is-invalid' : '' }}" type="text" name="twitter_url" id="twitter_url" value="{{ old('twitter_url', '') }}">
                @if($errors->has('twitter_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.twitter_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_url">{{ trans('cruds.contactContact.fields.other_url') }}</label>
                <input class="form-control {{ $errors->has('other_url') ? 'is-invalid' : '' }}" type="text" name="other_url" id="other_url" value="{{ old('other_url', '') }}">
                @if($errors->has('other_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('other_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.other_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="button_text">{{ trans('cruds.contactContact.fields.button_text') }}</label>
                <input class="form-control {{ $errors->has('button_text') ? 'is-invalid' : '' }}" type="text" name="button_text" id="button_text" value="{{ old('button_text', '') }}" required>
                @if($errors->has('button_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('button_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.button_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="button_url">{{ trans('cruds.contactContact.fields.button_url') }}</label>
                <input class="form-control {{ $errors->has('button_url') ? 'is-invalid' : '' }}" type="text" name="button_url" id="button_url" value="{{ old('button_url', '') }}" required>
                @if($errors->has('button_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('button_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.button_url_helper') }}</span>
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
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.contact-contacts.storeMedia') }}',
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
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($contactContact) && $contactContact->logo)
      var file = {!! json_encode($contactContact->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
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