@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contactCompany.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contact-companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.id') }}
                        </th>
                        <td>
                            {{ $contactCompany->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_name') }}
                        </th>
                        <td>
                            {{ $contactCompany->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_logo') }}
                        </th>
                        <td>
                            @if($contactCompany->company_logo)
                                <a href="{{ $contactCompany->company_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $contactCompany->company_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.description') }}
                        </th>
                        <td>
                            {{ $contactCompany->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_email') }}
                        </th>
                        <td>
                            {{ $contactCompany->company_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_phone') }}
                        </th>
                        <td>
                            {{ $contactCompany->company_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_address') }}
                        </th>
                        <td>
                            {{ $contactCompany->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.facebook_url') }}
                        </th>
                        <td>
                            {{ $contactCompany->facebook_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.instagram_url') }}
                        </th>
                        <td>
                            {{ $contactCompany->instagram_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.youtube_url') }}
                        </th>
                        <td>
                            {{ $contactCompany->youtube_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.tiktok_url') }}
                        </th>
                        <td>
                            {{ $contactCompany->tiktok_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.twitter_url') }}
                        </th>
                        <td>
                            {{ $contactCompany->twitter_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactCompany.fields.other_url') }}
                        </th>
                        <td>
                            {{ $contactCompany->other_url }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contact-companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection