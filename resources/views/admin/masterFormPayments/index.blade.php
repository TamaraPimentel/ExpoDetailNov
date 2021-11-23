@extends('layouts.admin')
@section('content')
@can('master_form_payment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.master-form-payments.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.masterFormPayment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.masterFormPayment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-MasterFormPayment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.buyer') }}
                        </th>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.conference') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($masterFormPayments as $key => $masterFormPayment)
                        <tr data-entry-id="{{ $masterFormPayment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $masterFormPayment->id ?? '' }}
                            </td>
                            <td>
                                {{ $masterFormPayment->conference->topic ?? '' }}
                            </td>
                            <td>
                                {{ $masterFormPayment->conference->date ?? '' }}
                            </td>
                            <td>
                                {{ $masterFormPayment->conference->price ?? '' }}
                            </td>
                            <td>
                                {{ $masterFormPayment->buyer->email ?? '' }}
                            </td>
                            <td>
                                {{ $masterFormPayment->buyer->name ?? '' }}
                            </td>
                            <td>
                                {{ $masterFormPayment->conference->name ?? '' }}
                            </td>
                            <td>
                                @can('master_form_payment_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.master-form-payments.show', $masterFormPayment->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('master_form_payment_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.master-form-payments.edit', $masterFormPayment->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('master_form_payment_delete')
                                    <form action="{{ route('admin.master-form-payments.destroy', $masterFormPayment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('master_form_payment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.master-form-payments.massDestroy') }}",
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
  let table = $('.datatable-MasterFormPayment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection