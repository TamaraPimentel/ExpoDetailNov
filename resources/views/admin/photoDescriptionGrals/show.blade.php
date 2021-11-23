@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.photoDescriptionGral.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.photo-description-grals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.photoDescriptionGral.fields.id') }}
                        </th>
                        <td>
                            {{ $photoDescriptionGral->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.photoDescriptionGral.fields.photo') }}
                        </th>
                        <td>
                            @if($photoDescriptionGral->photo)
                                <a href="{{ $photoDescriptionGral->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $photoDescriptionGral->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.photo-description-grals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection