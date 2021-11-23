@extends('layouts.admin')
@section('content')
@can('thru_video_time_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.thru-video-times.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.thruVideoTime.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.thruVideoTime.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ThruVideoTime">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.thruVideoTime.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.thruVideoTime.fields.video_url') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($thruVideoTimes as $key => $thruVideoTime)
                        <tr data-entry-id="{{ $thruVideoTime->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $thruVideoTime->id ?? '' }}
                            </td>
                            <td>
                                {{ $thruVideoTime->video_url ?? '' }}
                            </td>
                            <td>
                                @can('thru_video_time_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.thru-video-times.show', $thruVideoTime->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('thru_video_time_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.thru-video-times.edit', $thruVideoTime->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('thru_video_time_delete')
                                    <form action="{{ route('admin.thru-video-times.destroy', $thruVideoTime->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('thru_video_time_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.thru-video-times.massDestroy') }}",
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
  let table = $('.datatable-ThruVideoTime:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection