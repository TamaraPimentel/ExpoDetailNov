@extends('layouts.admin')
@section('content')
@can('header_photo_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.header-photos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.headerPhoto.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.headerPhoto.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-HeaderPhoto">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.headerPhoto.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.headerPhoto.fields.upper_photo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($headerPhotos as $key => $headerPhoto)
                        <tr data-entry-id="{{ $headerPhoto->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $headerPhoto->id ?? '' }}
                            </td>
                            <td>
                                @if($headerPhoto->upper_photo)
                                    <a href="{{ $headerPhoto->upper_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $headerPhoto->upper_photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('header_photo_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.header-photos.show', $headerPhoto->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('header_photo_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.header-photos.edit', $headerPhoto->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('header_photo_delete')
                                    <form action="{{ route('admin.header-photos.destroy', $headerPhoto->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('header_photo_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.header-photos.massDestroy') }}",
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
  let table = $('.datatable-HeaderPhoto:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection