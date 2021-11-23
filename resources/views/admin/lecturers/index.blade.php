@extends('layouts.admin')
@section('content')
@can('lecturer_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.lecturers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.lecturer.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.lecturer.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Lecturer">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.lecturer.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.lecturer.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.lecturer.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.lecturer.fields.topic') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lecturers as $key => $lecturer)
                        <tr data-entry-id="{{ $lecturer->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $lecturer->id ?? '' }}
                            </td>
                            <td>
                                {{ $lecturer->name ?? '' }}
                            </td>
                            <td>
                                {{ $lecturer->date ?? '' }}
                            </td>
                            <td>
                                {{ $lecturer->topic ?? '' }}
                            </td>
                            <td>
                                @can('lecturer_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.lecturers.show', $lecturer->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('lecturer_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.lecturers.edit', $lecturer->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('lecturer_delete')
                                    <form action="{{ route('admin.lecturers.destroy', $lecturer->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('lecturer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.lecturers.massDestroy') }}",
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
  let table = $('.datatable-Lecturer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection