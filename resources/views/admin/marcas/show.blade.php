@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.marca.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marcas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.id') }}
                        </th>
                        <td>
                            {{ $marca->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.logo') }}
                        </th>
                        <td>
                            @if($marca->logo)
                                <a href="{{ $marca->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $marca->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.name') }}
                        </th>
                        <td>
                            {{ $marca->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.address') }}
                        </th>
                        <td>
                            {{ $marca->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.email') }}
                        </th>
                        <td>
                            {{ $marca->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.web') }}
                        </th>
                        <td>
                            {{ $marca->web }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.instagram') }}
                        </th>
                        <td>
                            {{ $marca->instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.facebook') }}
                        </th>
                        <td>
                            {{ $marca->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.phone') }}
                        </th>
                        <td>
                            {{ $marca->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.image') }}
                        </th>
                        <td>
                            @if($marca->image)
                                <a href="{{ $marca->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $marca->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marcas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection