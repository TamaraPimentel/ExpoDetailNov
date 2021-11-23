@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.lecturer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.lecturers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.lecturer.fields.id') }}
                        </th>
                        <td>
                            {{ $lecturer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.lecturer.fields.name') }}
                        </th>
                        <td>
                            {{ $lecturer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.lecturer.fields.date') }}
                        </th>
                        <td>
                            {{ $lecturer->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.lecturer.fields.topic') }}
                        </th>
                        <td>
                            {{ $lecturer->topic }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.lecturers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection