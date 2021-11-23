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
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{session('status')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                    @if(session('status2'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{session('status2')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                 

                    <div class="impl_checkout_wrapper" id="impl_sform">
                        <ul id="step_progressbar">
                            <li class="active"><span>Datos</span></li>
                        </ul>

                        <div class="impl_step">
                            <div class="woocommerce">
			                    <form method="POST" action="{{route('guardardatos')}}">
                                @csrf
								  <div class="row">
								    <div class="form-group col-md-6">
								      <label for="name" style="float:left;">Nombre</label>
								      <input type="text" class="form-control" name="name" placeholder="Juan Pérez">
								    </div>
								    <div class="form-group col-md-6">
								      <label for="phone" style="float:left;">Teléfono</label>
								      <input type="text" class="form-control" name="phone" placeholder="55...">
								    </div>
								  </div>
								  <div class="row">
								    <div class="form-group col-md-6">
								      <label for="email" style="float:left;">Email</label>
								      <input type="email" class="form-control" name="email" placeholder="juan@test.com">
								    </div>
								    <div class="form-group col-md-6">
								      <label for="company" style="float:left;">Compañía</label>
								      <input type="text" class="form-control" name="company" placeholder="Service Car Detail">
								    </div>
								  </div>
								   <div class="row">
								    <div class="form-group col-md-6">
								      <label for="position" style="float:left;">Cargo</label>
								      <input type="text" class="form-control" name="position" placeholder="posición">
								    </div>
								 
								  </div>
								 
								  <div class="form-group">
								    <div class="form-check">

								    	<div class="row">
									    	<div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type='radio' name='a' value='c' id='checkMe2' onclick="check()" />Acepto los <a href="{{route('terminos')}}"style="text-decoration: underline;" target="_blank">Términos y Condiciones</a> y el <a href="#privacy" data-toggle="modal" style="text-decoration: underline;">Avíso de privacidad.</a>
                                            
									    	</div>
									    	
								    	</div>
								    </div>
								  </div>


                            </div>
                            <button type="submit" name="next" class="next action-button impl_btn" value="Next" id="choose" hidden="">Guardar</button>
                            </form>
                            <script>
                                function check()
                                {
                                var ele = document.getElementsByName('a');
                                var flag=0;
                                for(var i=0;i<ele.length;i++)
                                {
                                    if(ele[i].checked)
                                     flag=1;

                                } 
                                if(flag==1)
                                document.getElementById('choose').hidden=false;
}
                            </script>

                        </div>

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

    @endsection