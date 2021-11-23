@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.masterFormPayment.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.master-form-payments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.id') }}
                        </th>
                        <td>
                            {{ $masterFormPayment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.name') }}
                        </th>
                        <td>
                            {{ $masterFormPayment->conference->topic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.date') }}
                        </th>
                        <td>
                            {{ $masterFormPayment->conference->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.price') }}
                        </th>
                        <td>
                            {{ $masterFormPayment->conference->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.email') }}
                        </th>
                        <td>
                            {{ $masterFormPayment->buyer->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.buyer') }}
                        </th>
                        <td>
                            {{ $masterFormPayment->buyer->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.masterFormPayment.fields.conference') }}
                        </th>
                        <td>
                            {{ $masterFormPayment->conference->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.master-form-payments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection