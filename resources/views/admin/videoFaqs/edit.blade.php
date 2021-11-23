@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.videoFaq.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.video-faqs.update", [$videoFaq->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="video_faqs">{{ trans('cruds.videoFaq.fields.video_faqs') }}</label>
                <input class="form-control {{ $errors->has('video_faqs') ? 'is-invalid' : '' }}" type="text" name="video_faqs" id="video_faqs" value="{{ old('video_faqs', $videoFaq->video_faqs) }}">
                @if($errors->has('video_faqs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('video_faqs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.videoFaq.fields.video_faqs_helper') }}</span>
            </div>
           {{-- <div class="form-group">
                <label for="photo_faqs">{{ trans('cruds.videoFaq.fields.photo_faqs') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo_faqs') ? 'is-invalid' : '' }}" id="photo_faqs-dropzone">
                </div>
                @if($errors->has('photo_faqs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_faqs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.videoFaq.fields.photo_faqs_helper') }}</span>
            </div> --}}
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
    Dropzone.options.photoFaqsDropzone = {
    url: '{{ route('admin.video-faqs.storeMedia') }}',
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
      $('form').find('input[name="photo_faqs"]').remove()
      $('form').append('<input type="hidden" name="photo_faqs" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo_faqs"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($videoFaq) && $videoFaq->photo_faqs)
      var file = {!! json_encode($videoFaq->photo_faqs) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo_faqs" value="' + file.file_name + '">')
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