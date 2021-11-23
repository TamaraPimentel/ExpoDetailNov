@extends('layouts.pagesapp')
@section('content')
@section('titulo')
Aviso de privacidad
@endsection
    <div style="text-align-last: start;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading" style=" text-align:justify;">
                    	@forelse($aviso as $notice)
                        <p >{!!$notice->content!!}</p>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection