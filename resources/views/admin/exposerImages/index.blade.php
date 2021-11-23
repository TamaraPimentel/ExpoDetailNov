@extends('layouts.admin')
@section('content')
@can('exposer_image_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.exposer-images.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.exposerImage.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.exposerImage.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ExposerImage">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.exposerImage.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.exposerImage.fields.image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exposerImages as $key => $exposerImage)
                        <tr data-entry-id="{{ $exposerImage->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $exposerImage->id ?? '' }}
                            </td>
                            <td>
                                @if($exposerImage->image)
                                    <a href="{{ $exposerImage->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $exposerImage->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('exposer_image_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.exposer-images.show', $exposerImage->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('exposer_image_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.exposer-images.edit', $exposerImage->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('exposer_image_delete')
                                    <form action="{{ route('admin.exposer-images.destroy', $exposerImage->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('exposer_image_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.exposer-images.massDestroy') }}",
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
  let table = $('.datatable-ExposerImage:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection