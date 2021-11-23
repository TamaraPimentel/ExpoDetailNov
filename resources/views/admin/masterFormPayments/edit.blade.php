@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.masterFormPayment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.master-form-payments.update", [$masterFormPayment->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
              
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="null" hidden="">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.masterFormPayment.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                
                <input class="form-control datetime {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="01/02/2022 H:00:00" hidden="">
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.masterFormPayment.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="null" hidden="">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.masterFormPayment.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
               
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="null" hidden="">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.masterFormPayment.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="buyer_id">{{ trans('cruds.masterFormPayment.fields.buyer') }}</label>
                <select class="form-control select2 {{ $errors->has('buyer') ? 'is-invalid' : '' }}" name="buyer_id" id="buyer_id">
                    @foreach($buyers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('buyer_id') ? old('buyer_id') : $masterFormPayment->buyer->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('buyer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('buyer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.masterFormPayment.fields.buyer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="conference_id">{{ trans('cruds.masterFormPayment.fields.conference') }}</label>
                <select class="form-control select2 {{ $errors->has('conference') ? 'is-invalid' : '' }}" name="conference_id" id="conference_id">
                    @foreach($conferences as $id => $entry)
                        <option value="{{ $id }}" {{ (old('conference_id') ? old('conference_id') : $masterFormPayment->conference->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('conference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('conference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.masterFormPayment.fields.conference_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection