@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.slider.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sliders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.id') }}
                        </th>
                        <td>
                            {{ $slider->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.slider') }}
                        </th>
                        <td>
                            @if($slider->slider)
                                <a href="{{ $slider->slider->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $slider->slider->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.hero_title') }}
                        </th>
                        <td>
                            {{ $slider->hero_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.hero_subtitle') }}
                        </th>
                        <td>
                            {{ $slider->hero_subtitle }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.button_text') }}
                        </th>
                        <td>
                            {{ $slider->button_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.button_url') }}
                        </th>
                        <td>
                            {{ $slider->button_url }}
                        </td>
                    </tr>
                   {{-- <tr>
                        <th>
                            {{ trans('cruds.slider.fields.bottom_text') }}
                        </th>
                        <td>
                            {{ $slider->bottom_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.image') }}
                        </th>
                        <td>
                            @if($slider->image)
                                <a href="{{ $slider->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $slider->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>--}}
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sliders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection