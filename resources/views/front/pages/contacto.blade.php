@extends('layouts.pagesapp')
@section('content')
@section('titulo')
Contacto
@endsection
	@php
    $footerinfo=App\Models\ContactCompany::latest()->take(1)->get();
    @endphp
    <!------ Contact Wrapper Start ------>
    <div class="impl_contact_wrapper">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @endif
            <div class="row">
              
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    <div class="impl_con_form">
                        <div class="contact_map">
                            <div id="contact_map"></div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <h1>Contáctanos</h1>
                        </div>
                        <form action="{{route('contactform')}}" method="POST">
                        	@csrf
                            <input type="text" name="capcha" hidden="">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control require" placeholder="NOMBRE">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control require" placeholder="EMAIL" data-valid="email" data-error="El email debe ser válido.">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="ASUNTO">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="MENSAJE"></textarea>
                                </div>
                            </div>
                            <div class="response"></div>
                            <div class="col-lg-12 col-md-12">
                                <input type="hidden" name="form_type" value="contact">
                                <button type="submit" class="impl_btn submitForm" >Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                @forelse($footerinfo as $footer)
                <div class="col-lg-12 col-md-12">
                    <div class="impl_contact_info">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="impl_contact_box">
                                    <div class="impl_con_data">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h2>Teléfono</h2>
                                        <span>{{$footer->company_phone}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="impl_contact_box">
                                    <div class="impl_con_data">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <h2>Dirección</h2>
                                        <span>{{$footer->company_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="impl_contact_box">
                                    <div class="impl_con_data">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <h2>E - mail</h2>
                                        <span><a href="mailto: {{$footer->company_email}}"> {{$footer->company_email}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

@endsection