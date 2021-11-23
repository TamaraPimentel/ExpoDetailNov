@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.companyQuestion.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.company-questions.update", [$companyQuestion->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="statement">{{ trans('cruds.companyQuestion.fields.statement') }}</label>
                <input class="form-control {{ $errors->has('statement') ? 'is-invalid' : '' }}" type="text" name="statement" id="statement" value="{{ old('statement', $companyQuestion->statement) }}" required>
                @if($errors->has('statement'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statement') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.companyQuestion.fields.statement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meaning">{{ trans('cruds.companyQuestion.fields.meaning') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('meaning') ? 'is-invalid' : '' }}" name="meaning" id="meaning">{!! old('meaning', $companyQuestion->meaning) !!}</textarea>
                @if($errors->has('meaning'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meaning') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.companyQuestion.fields.meaning_helper') }}</span>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.company-questions.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $companyQuestion->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection