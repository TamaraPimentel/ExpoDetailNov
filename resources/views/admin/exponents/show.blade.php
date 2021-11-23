@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.exponent.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.exponents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.exponent.fields.id') }}
                        </th>
                        <td>
                            {{ $exponent->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exponent.fields.photo') }}
                        </th>
                        <td>
                            @if($exponent->photo)
                                <a href="{{ $exponent->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $exponent->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exponent.fields.name') }}
                        </th>
                        <td>
                            {{ $exponent->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exponent.fields.topic') }}
                        </th>
                        <td>
                            {{ $exponent->topic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exponent.fields.date') }}
                        </th>
                        <td>
                            {{ $exponent->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exponent.fields.curriculum') }}
                        </th>
                        <td>
                            {!! $exponent->curriculum !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.exponents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection