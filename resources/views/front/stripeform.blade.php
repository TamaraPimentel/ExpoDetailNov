<!DOCTYPE html>

<html lang="es">


<head>
    <title>Expo Detail México</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Impel">
    <meta name="keywords" content="">
    <meta name="author" content="hsoft">
    <meta name="MobileOptimized" content="320">
    <!--Srart Style -->
    <link rel="stylesheet" type="text/css" href="template/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="template/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="template/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="template/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" type="text/css" href="template/js/plugin/magnific/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="template/js/plugin/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="template/js/plugin/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="template/js/plugin/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="template/css/style.css">

    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="template/images/favicon.png">
</head>

<body>
    <!------ Header Start ------>
   <div class="impl_header_wrapper">
        <div class="impl_logo">
            <a href="/"><img src="http://expodetail.test/storage/1/61564247b2522_logo-solo.png" alt="Logo" class="img-fluid" style="width:100%; height:80px;"></a>
        </div>
        <div class="impl_top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="impl_top_info">
                            <ul class="impl_header_social">
                                <li><a href="https://www.facebook.com/Expo-Detail-México-106743035054588/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://vm.tiktok.com/ZMRESmbQK/"><i class="fa fa-deviantart" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/expodetailmexico?r=nametag"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--menu start-->
        <div class="impl_menu_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button class="impl_menu_btn">
                            <i class="fa fa-car" aria-hidden="true"></i>
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="impl_menu_inner">
                            <div class="impl_logo_responsive">
                                <a href="/"><img src=" http://expodetail.test/storage/1/61564247b2522_logo-solo.png" alt="Logo" class="img-fluid" style="width:100%; height:80px;"></a>
                            </div>
                            <a href="https://goo.gl/maps/HGw7YQkhYapZRAvL6" target="_blank" class="impl_btn">Conoce la sede</a>
                            <div class="impl_menu">
                                <nav>
                                    <div class="menu_cross">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                     <ul>
                                        <li><a href="" class="active">Inicio</a>
                                        </li>
                                        <li><a href="">Nosotros</a></li>
                                        <li><a href="">Marcas</a>
                                        </li>
                                        <li class="dropdown"><a href="">Cronograma</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Horarios</a></li>
                                                <li><a href="">Conferencistas</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper" style="background-image: url(http://expodetail.test/storage/3/615b344c0db30_4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Registro</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">
                        Registro
                    </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Sell wrapper  Start ------>
    <div class="impl_sell_wrapper">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    @if(session('status2'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('status2')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                    <div class="impl_checkout_wrapper" id="impl_sform">
                        <ul id="step_progressbar">
                            <li class="active"><span>STRIPE</span></li>
                        </ul>
                       
                        <div class="impl_step">
                            <h4>Entrada al evento 5 y 6 de feb de 2022, $120.00 MX </h4>
                            <br>
                            <br>
                            <div class="woocommerce">
                                <form method="POST" action="{{route('stripePayStatus')}}">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="number" style="float:left;">Número de tarjeta</label>
                                       <input type="text" class="form-control" id="number" name="number" placeholder="4242424242424242" >
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="expiryMonth" style="float:left;">Mes de vencimiento</label>
                                      <input type="text" class="form-control" id="expiryMonth" name="expiryMonth" placeholder="06">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="expiryYear" style="float:left;">Año de vencimiento</label>
                                      <input type="text" class="form-control" id="expiryYear" name="expiryYear" placeholder="2018">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="cvv" style="float:left;">CVV</label>
                                      <input type="text" class="form-control" id="cvv" name="cvv" placeholder="352">
                                    </div>
                                </div>
                                
                                 
                            </div>
                                                              
                            </div>
                                <button type="submit" name="next" class="next action-button impl_btn" value="Next" >Pagar</button>
                            </form>
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
                    <p style="color:#000;">
                        <span>¿Quiénes somos?</span> <br>Luis Manuel Pérez Rodríguez, mejor conocido como Expo Detail México, condomicilio en calle Jilotepec 382, colonia Hab. La Romana, ciudad Estado deMéxico, municipio o delegación Tlalnepantla de Baz, c.p. 54030, en la entidad deMéxico, país México, y portal de internet www.expodetailmexico.com, es elresponsable del uso y protección de sus datos personales, y al respecto leinformamos lo siguiente:<br> <span>¿Para qué fines utilizaremossus datos personales?</span> <br>De manera adicional, utilizaremos su información personal para las siguientesfinalidades secundarias que no son necesarias para el servicio solicitado, peroque nos permiten y facilitan brindarle una mejor atención: Para hacerle llegar boletines informativos sobre el eventolPara hacerle llegar información respecto a su registrolPara llevar a cabo el registro de asistencia al eventolMercadotecnia o publicitarialProspección comercialEn caso de que no desee que sus datos personales sean tratados para estos finessecundarios, desde este momento usted nos puede comunicar lo anterior a través del siguiente mecanismo:Enviar correo a expodetailmexio@gmail.com La negativa para el uso de sus datos personales para estas finalidades no podráser un motivo para que le neguemos los servicios y productos que solicita ocontrata con nosotros.<br><span>¿Dónde puedo consultar el aviso de privacidad integral?</span><br>Para conocer mayor información sobre los términos y condiciones en que serántratados sus datos personales, como los terceros con quienes compartimos suinformación personal y la forma en que podrá ejercer sus derechos ARCO, puede consultar el aviso de privacidad integral en:Internet.
                    </p>
                </div>
        
            </div>
        
        </div>
    </div>
    </div>
    <!------ Footer Section Start ------>
    <div class="impl_footer_wrapper" style="background-image: url(http://expodetail.test/storage/3/615b344c0db30_4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="impl_foo_box footer_abt_text">
                            <a href="/"><img src="http://expodetail.test/storage/1/61564247b2522_logo-solo.png" alt="" style="height:80px;"></a>
                            <p>Expo Detail México es un espacio en el cual se busca el crecimiento de el Detallado Profesional de vehículos, mediante una exposición de proveedores, conferencias magistrales y centro de negocios.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="impl_foo_box">
                            <h1 class="impl_foo_title">Contacto</h1>
                            <ul>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">
                                        <p>(55)48140114</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">

                                        <p>Jilotepec número 382<br>La Romana Tlalnepantla estado de México</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">
                                         <a href="mailto: contacto@expodetailmexico.com">contacto@expodetailmexico.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4  col-sm-12">
                             <div class="impl_foo_box">
                            <h1 class="impl_foo_title">Redes Sociales</h1>
                              <ul class="impl_header_social">
                                <li><a href="https://www.facebook.com/Expo-Detail-México-106743035054588/"><i class="fa fa-facebook" aria-hidden="true"></i></a> facebook</li>
                                <li><a href="https://vm.tiktok.com/ZMRESmbQK/"><i class="fa fa-deviantart" aria-hidden="true"></i></a> tiktok</li>
                                <li><a href="https://www.instagram.com/expodetailmexico?r=nametag"><i class="fa fa-instagram" aria-hidden="true"></i></a> instagram</li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!----Bottom Footer Start---->
    <div class="impl_btm_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p class="impl_copyright">Expo Detail Mexico&copy; 2021 por: <a href="https://www.behance.net/tamyxp" target="_blank">Tamara Pimentel</a></p>
                </div>
            </div>
        </div>      
    </div>
    <!---- Go To Top---->
    <span class="gotop"><img src="template/images/goto.png" alt=""></span>
    <!--Main js file Style-->
    <script type="text/javascript" src="template/js/jquery.js"></script>
    <script type="text/javascript" src="template/js/popper.js"></script>
    <script type="text/javascript" src="template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="template/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="template/js/plugin/magnific/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="template/js/plugin/slick/slick.min.js"></script>
    <script type="text/javascript" src="template/js/step.js"></script>
    <script type="text/javascript" src="template/js/plugin/nice_select/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="template/js/custom.js"></script>
    <!--Main js file End-->
</body>

</html>