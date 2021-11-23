@extends('layouts.admin')
@section('content')
@can('registration_form_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.registration-forms.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.registrationForm.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'RegistrationForm', 'route' => 'admin.registration-forms.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.registrationForm.title_singular') }} {{ trans('global.list') }}
    </div>
      @if(session('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-RegistrationForm">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.registrationForm.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.registrationForm.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.registrationForm.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.registrationForm.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.registrationForm.fields.company') }}
                        </th>
                        <th>
                            {{ trans('cruds.registrationForm.fields.position') }}
                        </th>
                        <th>
                            {{ trans('cruds.registrationForm.fields.link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registrationForms as $key => $registrationForm)
                        <tr data-entry-id="{{ $registrationForm->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $registrationForm->id ?? '' }}
                            </td>
                            <td>
                                {{ $registrationForm->name ?? '' }}
                            </td>
                            <td>
                                {{ $registrationForm->phone ?? '' }}
                            </td>
                            <td>
                                {{ $registrationForm->email ?? '' }}
                            </td>
                            <td>
                                {{ $registrationForm->company ?? '' }}
                            </td>
                            <td>
                                {{ $registrationForm->position ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $registrationForm->link ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $registrationForm->link ? 'checked' : '' }}>
                            </td>
                            <td>
                               @can('registration_form_show')
                                    <a class="btn btn-xs btn-warning" href="{{ route('admin.registration-forms.mail', $registrationForm->id) }}">
                                        <i class="fa fa-envelope-o" style="color:#fff"></i>
                                    </a>
                                @endcan
                                @can('registration_form_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.registration-forms.show', $registrationForm->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('registration_form_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.registration-forms.edit', $registrationForm->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('registration_form_delete')
                                    <form action="{{ route('admin.registration-forms.destroy', $registrationForm->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('registration_form_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.registration-forms.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-RegistrationForm:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection