@extends('layouts.pagesapp')
@section('content')
@section('titulo')
Registro
@endsection
    <!------ Sell wrapper  Start ------>
    <div class="impl_sell_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    @if(session('status'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                    <h4 class="text-center">Entrada al evento $120.00 MXN, febrero 5 y 6 2022.<br> Elige tu método de pago, paga y registra tus datos para recibir tu boleto vía e-mail</h4><br>
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
                                    <a href="#stripe" data-toggle="modal" style="text-decoration: underline;"><img src="template/images/botones/STRIPE-BOTON.png"></a>
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
                            <p>Una vez realizada tu transferecia, te pedimos te comuniques con nostoros vía WA (55 48140114) con la siguiente información para poder generar tu boleto y enviártelo:<br>
                                -Foto del comprobante de pago<br>
                                -Nombre, email, teléfono, empresa y puesto<br>

                            Elegir éste método implica aceptar los <a href="{{route('terminos')}}" target="_blank" style="text-decoration: underline;">Términos y Condiciones</a> y el <a href="#privacy" data-toggle="modal" style="text-decoration: underline;">Avíso de privacidad.</a>
                                            
                            </p>
                            <br>
                            <button type="button" name="next" class="next action-button impl_btn" value="Next">Aceptar</button>
                        </div>
                        <!--fourth step-->
                        <div class="impl_step impl_print_rcpt">
                            <h1>¡Gracias, esperamos tus datos!</h1>
                        </div>
                    </div>

  <!--stripe form-->
    <div class="modal" id="stripe">
        <div class="impl_signin">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="impl_form">
                <div class="container" style="padding:40px;">
                    <h1 style="color:#000; text-align: center;">Información importante</h1>
                    <br>
                    <p style="color:#000;">Una vez realizada tu transferecia, te pedimos te comuniques con nostoros vía WA (55 48140114) con la siguiente información para poder generar tu boleto y enviártelo:<br>
                                -Foto del comprobante de pago<br>
                                -Nombre, email, teléfono, empresa y puesto<br>

                            Elegir éste método implica aceptar los <a href="{{route('terminos')}}" target="_blank" style="text-decoration: underline; color:#000;">Términos y Condiciones</a> y el <a href="#privacy" data-toggle="modal" style="text-decoration: underline; color:#000;">Avíso de privacidad.</a>
                                            
                    </p>
                    <a href="https://buy.stripe.com/dR6eVEb8Z7CXe7S3cc" class="next action-button impl_btn">Proceder a pagar</a>
                </div>
        
            </div>
        
        </div>
    </div>                



  <!--privacy form-->
    <div class="modal" id="privacy">
        <div class="impl_signin">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="impl_form">
                <div class="container" style="padding:40px;">
                    <h1 style="color:#000; text-align: center;">Aviso de privacidad</h1>
                    <br>
                    <p style="color:#000;">
                        <span>¿Quiénes somos?</span> <br>Luis Manuel Pérez Rodríguez, mejor conocido como Expo Detail México, condomicilio en calle Jilotepec 382, colonia Hab. La Romana, ciudad Estado deMéxico, municipio o delegación Tlalnepantla de Baz, c.p. 54030, en la entidad deMéxico, país México, y portal de internet www.expodetailmexico.com, es elresponsable del uso y protección de sus datos personales, y al respecto leinformamos lo siguiente:<br> <span>¿Para qué fines utilizaremossus datos personales?</span> <br>De manera adicional, utilizaremos su información personal para las siguientesfinalidades secundarias que no son necesarias para el servicio solicitado, peroque nos permiten y facilitan brindarle una mejor atención: Para hacerle llegar boletines informativos sobre el eventolPara hacerle llegar información respecto a su registrolPara llevar a cabo el registro de asistencia al eventolMercadotecnia o publicitarialProspección comercialEn caso de que no desee que sus datos personales sean tratados para estos finessecundarios, desde este momento usted nos puede comunicar lo anterior a través del siguiente mecanismo:Enviar correo a expodetailmexio@gmail.com La negativa para el uso de sus datos personales para estas finalidades no podráser un motivo para que le neguemos los servicios y productos que solicita ocontrata con nosotros.<br><span>¿Dónde puedo consultar el aviso de privacidad integral?</span><br>Para conocer mayor información sobre los términos y condiciones en que serántratados sus datos personales, como los terceros con quienes compartimos suinformación personal y la forma en que podrá ejercer sus derechos ARCO, puede consultar el aviso de privacidad integral en:Internet.
                    </p>
                </div>
        
            </div>
        
        </div>
    </div>
                </div>
            </div>
        </div>

        <!--terms and conditions form-->
    <div class="modal" id="terms">
        <div class="impl_signin">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="impl_form">
                <div class="container" style="padding:40px;">
                    <h1 style="color:#000; text-align: center;">Términos y condiciones</h1>
                    <br>
                    <p style="color:#000;">lknhkjghljlkj</p>
                </div>
        
            </div>
        
        </div>
    </div>

  <!--privacy form-->
    <div class="modal" id="privacy">
        <div class="impl_signin">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="impl_form">
                <div class="container" style="padding:40px;">
                    <h1 style="color:#000; text-align: center;">Aviso de privacidad</h1>
                    <br>
                    <p style="color:#000;">lknhkjghljlkj</p>
                </div>
        
            </div>
        
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="template/js/step.js"></script>
@endsection