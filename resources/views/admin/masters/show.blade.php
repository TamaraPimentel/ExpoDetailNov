@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.master.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.masters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.master.fields.id') }}
                        </th>
                        <td>
                            {{ $master->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.master.fields.name') }}
                        </th>
                        <td>
                            {{ $master->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.master.fields.date') }}
                        </th>
                        <td>
                            {{ $master->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.master.fields.price') }}
                        </th>
                        <td>
                            {{ $master->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.master.fields.topic') }}
                        </th>
                        <td>
                            {{ $master->topic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.master.fields.owner') }}
                        </th>
                        <td>
                            {{ $master->owner->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.masters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection