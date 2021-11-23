@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.headerPhoto.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.header-photos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.headerPhoto.fields.id') }}
                        </th>
                        <td>
                            {{ $headerPhoto->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.headerPhoto.fields.upper_photo') }}
                        </th>
                        <td>
                            @if($headerPhoto->upper_photo)
                                <a href="{{ $headerPhoto->upper_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $headerPhoto->upper_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.header-photos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection