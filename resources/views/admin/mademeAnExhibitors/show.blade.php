@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.mademeAnExhibitor.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.mademe-an-exhibitors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.mademeAnExhibitor.fields.id') }}
                        </th>
                        <td>
                            {{ $mademeAnExhibitor->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mademeAnExhibitor.fields.name') }}
                        </th>
                        <td>
                            {{ $mademeAnExhibitor->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mademeAnExhibitor.fields.email') }}
                        </th>
                        <td>
                            {{ $mademeAnExhibitor->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mademeAnExhibitor.fields.message') }}
                        </th>
                        <td>
                            {{ $mademeAnExhibitor->message }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.mademe-an-exhibitors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection