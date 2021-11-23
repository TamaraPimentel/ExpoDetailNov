@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.thruTime.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.thru-times.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.thruTime.fields.id') }}
                        </th>
                        <td>
                            {{ $thruTime->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thruTime.fields.icon') }}
                        </th>
                        <td>
                            @if($thruTime->icon)
                                <a href="{{ $thruTime->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $thruTime->icon->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thruTime.fields.title') }}
                        </th>
                        <td>
                            {{ $thruTime->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.thruTime.fields.description') }}
                        </th>
                        <td>
                            {!! $thruTime->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.thru-times.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection