@extends('layouts.pagesapp')
@section('content')
@section('titulo')
Horarios
@endsection

<style type="text/css">
body{
    margin-top:20px;
}
.bg-light-gray {
    background-color: transparent;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}


.bg-sky.box-shadow {
    box-shadow: 0px 5px 0px 0px #00a2a7
}

.bg-orange.box-shadow {
    box-shadow: 0px 5px 0px 0px #af4305
}

.bg-green.box-shadow {
    box-shadow: 0px 5px 0px 0px #4ca520
}

.bg-yellow.box-shadow {
    box-shadow: 0px 5px 0px 0px #dcbf02
}

.bg-pink.box-shadow {
    box-shadow: 0px 5px 0px 0px #e82d8b
}

.bg-purple.box-shadow {
    box-shadow: 0px 5px 0px 0px #8343e8
}

.bg-lightred.box-shadow {
    box-shadow: 0px 5px 0px 0px #d84213
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}

.padding-15px-lr {
    padding-left: 15px;
    padding-right: 15px;
}
.padding-5px-tb {
    padding-top: 5px;
    padding-bottom: 5px;
}
.margin-10px-bottom {
    margin-bottom: 10px;
}
.border-radius-5 {
    border-radius: 5px;
}

.margin-10px-top {
    margin-top: 10px;
}
.font-size14 {
    font-size: 14px;
}

.text-light-gray {
    color: #d6d5d5;
}
.font-size13 {
    font-size: 13px;
}

.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
</style>

<div class="container">
    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Conferencia Magistral</span> <br> <br>
    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Conferencia Pública</span>

    <div class="timetable-img text-center">
        <img src="img/content/timetable.png" alt="">
    </div>

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr class="bg-light-gray">
                    <th class="text-uppercase">Horario
                    </th>
                    <th class="text-uppercase">Conferencista</th>
                
                    
                </tr>
            </thead>
            <tbody>

            	@forelse($juntos as $event)
                <tr>
                    <td class="align-middle">{{\Carbon\Carbon::parse($event->date)->format('m/d/Y')}}</td>
                    <!------Conferencias------>
                    <td>
                        @if($event->price)
                            <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$event->topic}}</span>
                            <div class="margin-10px-top font-size14">{{\Carbon\Carbon::parse($event->date)->format('H:i:00')}}</div>
                            <div class="font-size13 text-light-gray">{{$event->name}}</div>
                            <div class="font-size13 text-light-gray">$ {{$event->price}} MXN</div>
                        @else
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$event->topic}}</span>
                            <div class="margin-10px-top font-size14">{{\Carbon\Carbon::parse($event->date)->format('H:i:00')}}</div>
                            <div class="font-size13 text-light-gray">{{$event->name}}</div>
                        @endif
                        
                    </td>

                </tr>
                @empty
                @endforelse
                

            </tbody>
        </table>
    </div>

 
    {{--<!------ PAGOS CONFERENCIAS ------>
    <div class="impl_sell_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1">

                    <h4 class="text-center">Conferencias magistrales $400.00 MXN, febrero 5 y 6 2022.<br> Elige tu método de pago</h4><br>
                    <div class="impl_checkout_wrapper" id="impl_sform">
                        <ul id="step_progressbar">
                            <li class="active"><span>Método de Pago</span></li>
                            <li><span>Transferencia</span></li>
                        </ul>

                        <div class="impl_step impl_pay_wrapper">
                            <h5>Elige entre nuestros métodos de pago</h5>
                            <br>
                            <div class="row" style="place-content:center;">
   
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <!--PAYPAL-->                             
                                      <a href="{{route('paypalPay')}}"><img src="template/images/botones/PAYPAL-BOTON.png"></a>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <!--STRIPE-->  
                                    <a href=""style="text-decoration: underline;"><img src="template/images/botones/STRIPE-BOTON.png"></a>
                                </div> 

                            </div>
                            <button type="button" name="next" class="next action-button" value="Next" style="background:#0a0a0a;border-color:#0a0a0a;"><img src="template/images/botones/DEPOSITO-BOTON.png"></button>

                        </div>
                        <!--fourth step-->
                        <div class="impl_step impl_print_rcpt">
                            <h1>Datos bancarios</h1>
                            <p>BBVA Bancomer<br>
                            Cuenta: 2897188358<br>
                            Cuenta CLABE: 012 180 02897188358 9<br>
                            Tarjeta de debito: 4152 3136 5488 3805 <br>
                            Luis Manuel Pérez Rodríguez</p>
                            <hr>
                            <br>
                            <button type="button" name="next" class="next action-button impl_btn" value="Next">Aceptar</button>
                        </div>

                        <!--fourth step-->
                        <div class="impl_step impl_print_rcpt">
                            <h1>¡Gracias, esperamos tus datos!</h1>
                        </div>
                    </div>                



                </div>
            </div>
        </div>
    </div>--}}

</div>

@endsection

@section('scripts')
    <script type="text/javascript" src="template/js/step.js"></script>
@endsection