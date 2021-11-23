@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.registrationForm.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registration-forms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.registrationForm.fields.id') }}
                        </th>
                        <td>
                            {{ $registrationForm->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registrationForm.fields.name') }}
                        </th>
                        <td>
                            {{ $registrationForm->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registrationForm.fields.phone') }}
                        </th>
                        <td>
                            {{ $registrationForm->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registrationForm.fields.email') }}
                        </th>
                        <td>
                            {{ $registrationForm->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registrationForm.fields.company') }}
                        </th>
                        <td>
                            {{ $registrationForm->company }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registrationForm.fields.position') }}
                        </th>
                        <td>
                            {{ $registrationForm->position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registrationForm.fields.link') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $registrationForm->link ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registration-forms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection