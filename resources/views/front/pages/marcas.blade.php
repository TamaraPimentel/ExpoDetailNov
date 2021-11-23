@extends('layouts.pagesapp')
@section('content')
@section('titulo')
Marcas
@endsection
<style type="text/css">
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

    

    <!------Brands ------>
    <div class="impl_provide_wrapper">
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
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">                      
                    </div>
                </div>
          
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="impl_facility_wrapper">
                               @if($marcas[0] !== null)
                                <img src="{{$marcas[0]->image->getUrl()}}" alt="" style="widht:312px; height:218px;" class="img-fluid" />
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 centered"> 
                                    <h3>{{$marcas[0]->name}}</h3>
                                    <a href="#{{$marcas[0]->id}}" data-toggle="modal" style="text-decoration: underline;">Más información</a>
                                    </div> 
                                </div>
                                <div class="impl_ser_hover_ovrly">
                                    <div class="impl_ser_text">
                                        <img src="{{$marcas[0]->logo->getUrl()}}" style="width:50%; object-fit:contain;" alt="key" />           
                                    </div>
                                    <div class="impl_ser_text_ovrly">
                                    </div>
                                </div>
                                @else
                                
                                @endif                              
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="impl_facility_wrapper">
                                @if($marcas[1] !== null)
                                <img src="{{$marcas[1]->image->getUrl()}}" alt="" style="widht:312px; height:218px;" class="img-fluid" />
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 centered"> 
                                       <h3>{{$marcas[1]->name}}</h3>    
                                    <a href="#{{$marcas[1]->id}}" data-toggle="modal" style="text-decoration: underline;">Más información</a>
                                    </div> 
                                </div>
                                <div class="impl_ser_hover_ovrly">
                                    <div class="impl_ser_text">
                                        <img src="{{$marcas[1]->logo->getUrl()}}" style="width:50%; object-fit:contain;" alt="key" />                                
                                    </div>
                                    <div class="impl_ser_text_ovrly">
                                    </div>
                                </div>
                                @else
                                
                                @endif   
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="impl_facility_wrapper">
                                @if($marcas[2] !== null)
                                <img src="{{$marcas[2]->image->getUrl()}}" alt="" style="widht:312px; height:218px;" class="img-fluid" />
                                <div class="2ow">
                                    <div class="col-lg-12 col-md-12 col-sm-12 centered"> 
                                    <h3>{{$marcas[2]->name}}</h3>
                                    <a href="#{{$marcas[2]->id}}" data-toggle="modal" style="text-decoration: underline;">Más información</a>
                                    </div> 
                                </div>
                                <div class="impl_ser_hover_ovrly">
                                    <div class="impl_ser_text">
                                        <img src="{{$marcas[2]->logo->getUrl()}}" style="width:50%; object-fit:contain;" alt="key" />          
                                    </div>
                                    <div class="impl_ser_text_ovrly">
                                    </div>
                                </div>
                                @else
                                
                                @endif   
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="impl_facility_wrapper">
                                @if($marcas[3] !== null)
                                <img src="{{$marcas[3]->image->getUrl()}}" alt="" style="widht:312px; height:218px;" class="img-fluid" />
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 centered"> 
                                    <h3>{{$marcas[3]->name}}</h3>    
                                    <a href="#{{$marcas[3]->id}}" data-toggle="modal" style="text-decoration: underline;">Más información</a>
                                    </div> 
                                </div>
                                <div class="impl_ser_hover_ovrly">
                                    <div class="impl_ser_text">
                                        <img src="{{$marcas[3]->logo->getUrl()}}" style="width:50%; object-fit:contain;" alt="key" />        
                                    </div>
                                    <div class="impl_ser_text_ovrly">
                                    </div>
                                </div>
                                @else
                                
                                @endif   
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="impl_service_video">
                        <div class="impl_video_inner" style="object-fit: cover; width: 555px; height:397px;">
                            <div class="impl_servdo_video">
                                @if($videos[0] !==null)
                                    <span class="impl_play_icon"><a class="impl-popup-youtube" href="https://www.youtube.com/watch?v={{$videos[0]->video_url}}"><i class="fa fa-play" aria-hidden="true"></i></a></span>
                                @else
                                    <img src="/template/images/llantas.jpg" style="width:555px; height:397px; object-fit: cover;">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="impl_service_video" style="object-fit: cover; width: 555px; height:397px;">
                        <div class="impl_video_inner  impl_ser_video_img">
                            <div class="impl_servdo_video">
                                @if($videos[1] !==null)
                                    <span class="impl_play_icon"><a class="impl-popup-youtube" href="https://www.youtube.com/watch?v={{$videos[1]->video_url}}"><i class="fa fa-play" aria-hidden="true"></i></a></span>
                                @else
                                    <img src="/template/images/llantas.jpg" style="width:555px; height:397px; object-fit: cover;">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="impl_facility_wrapper">
                                @if($marcas[4] !== null)
                                <img src="{{$marcas[4]->image->getUrl()}}" alt="" style="widht:312px; height:218px;" class="img-fluid" />
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 centered">
                                    <h3>{{$marcas[4]->name}}</h3> 
                                    <a href="#{{$marcas[4]->id}}" data-toggle="modal" style="text-decoration: underline;">Más información</a>
                                    </div> 
                                </div>
                                <div class="impl_ser_hover_ovrly">
                                    <div class="impl_ser_text">
                                        <img src="{{$marcas[4]->logo->getUrl()}}" style="width:50%; object-fit:contain;" alt="key" />          
                                    </div>
                                    <div class="impl_ser_text_ovrly">
                                    </div>
                                </div>
                                @else
                               
                                @endif   
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="impl_facility_wrapper">
                                @if($marcas[5] !== null)
                                <img src="{{$marcas[5]->image->getUrl()}}" alt="" style="widht:312px; height:218px;" class="img-fluid" />
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 centered">
                                    <h3>{{$marcas[5]->name}}</h3> 
                                    <a href="#{{$marcas[5]->id}}" data-toggle="modal" style="text-decoration: underline;">Más información</a>
                                    </div> 
                                </div>
                                <div class="impl_ser_hover_ovrly">
                                    <div class="impl_ser_text">
                                        <img src="{{$marcas[5]->logo->getUrl()}}" style="width:50%; object-fit:contain;" alt="key" />         
                                    </div>
                                    <div class="impl_ser_text_ovrly">
                                    </div>
                                </div>
                                @else
                            
                                @endif   
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="impl_facility_wrapper">
                                @if($marcas[6] !== null)
                                <img src="{{$marcas[6]->image->getUrl()}}" alt="" style="widht:312px; height:218px;" class="img-fluid" />
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 centered">
                                    <h3>{{$marcas[6]->name}}</h3> 
                                    <a href="#{{$marcas[6]->id}}" data-toggle="modal" style="text-decoration: underline;">Más información</a>
                                    </div> 
                                </div>
                                <div class="impl_ser_hover_ovrly">
                                    <div class="impl_ser_text">
                                        <img src="{{$marcas[6]->logo->getUrl()}}" style="width:50%; object-fit:contain;" alt="key" />                                            
                                    </div>
                                    <div class="impl_ser_text_ovrly">
                                    </div>
                                </div>
                                @else
                             
                                @endif   
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="impl_facility_wrapper">
                                @if($marcas[7] !== null)
                                <img src="{{$marcas[7]->image->getUrl()}}" alt="" style="widht:312px; height:218px;" class="img-fluid" />
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 centered"> 
                                    <h3>{{$marcas[7]->name}}</h3>
                                    <a href="#{{$marcas[7]->id}}" data-toggle="modal" style="text-decoration: underline;">Más información</a>
                                    </div> 
                                </div>
                                <div class="impl_ser_hover_ovrly">
                                    <div class="impl_ser_text">
                                        <img src="{{$marcas[7]->logo->getUrl()}}" style="width:50%; object-fit:contain;" alt="key" />      
                                    </div>
                                    <div class="impl_ser_text_ovrly">
                                    </div>
                                </div>
                                @else
                               
                                @endif   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="text-center" style="padding:30px 0 30px 0;">{{$marcas->links()}}</div>
                </div>
            </div>
        </div>

            @if($marcas[0] !==null)
                <!--MODAL 0-->
                <div class="modal" id="{{$marcas[0]->id}}">
                    <div class="impl_signin">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="impl_form">
                            <div class="container" style="padding:40px;">
                                <h1 style="color:#000; text-align: center;">Datos de la empresa</h1>
                                <br>
                                <p style="color:#000;">
                                   @if($marcas[0]->address)   
                                   <b>Dirección: </b>{{$marcas[0]->address}}<br>
                                   @else
                                   @endif

                                   @if($marcas[0]->email)  
                                   <b>E mail: </b>{{$marcas[0]->email}}<br>
                                   @else
                                   @endif

                                   @if($marcas[0]->web)
                                   <b>Sitio web : </b><a href="{{$marcas[0]->web}}" target="_blank" style="color: #000">{{$marcas[0]->web}}</a><br>
                                   @else
                                   @endif

                                   @if($marcas[0]->phone)
                                   <b>Teléfono: </b>{{$marcas[0]->phone}}<br>
                                   @else
                                   @endif

                                   @if($marcas[0]->facebook)
                                   <b>Facebook: </b>{{$marcas[0]->facebook}}<br>
                                   @else
                                   @endif

                                   @if($marcas[0]->instagram)
                                   <b>Instagram: </b>{{$marcas[0]->instagram}}<br>
                                   @else
                                   @endif
                                </p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            @else
            @endif        
            @if($marcas[1] !==null)
                <!--MODAL 1-->
                <div class="modal" id="{{$marcas[1]->id}}">
                    <div class="impl_signin">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="impl_form">
                            <div class="container" style="padding:40px;">
                                <h1 style="color:#000; text-align: center;">Datos de la empresa</h1>
                                <br>
                                <p style="color:#000;">
                                   @if($marcas[1]->address)   
                                   <b>Dirección: </b>{{$marcas[1]->address}}<br>
                                   @else
                                   @endif

                                   @if($marcas[1]->email)  
                                   <b>E mail: </b>{{$marcas[1]->email}}<br>
                                   @else
                                   @endif

                                   @if($marcas[1]->web)
                                   <b>Sitio web : </b><a href="{{$marcas[1]->web}}" target="_blank"  style="color: #000">{{$marcas[1]->web}}</a><br>
                                   @else
                                   @endif

                                   @if($marcas[1]->phone)
                                   <b>Teléfono: </b>{{$marcas[1]->phone}}<br>
                                   @else
                                   @endif

                                   @if($marcas[1]->facebook)
                                   <b>Facebook: </b>{{$marcas[1]->facebook}}<br>
                                   @else
                                   @endif

                                   @if($marcas[1]->instagram)
                                   <b>Instagram: </b>{{$marcas[1]->instagram}}<br>
                                   @else
                                   @endif
                                </p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            @else
            @endif        
            @if($marcas[2] !==null)
                <!--MODAL 2-->
                <div class="modal" id="{{$marcas[2]->id}}">
                    <div class="impl_signin">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="impl_form">
                            <div class="container" style="padding:40px;">
                                <h1 style="color:#000; text-align: center;">Datos de la empresa</h1>
                                <br>
                                <p style="color:#000;">
                                   @if($marcas[2]->address)   
                                   <b>Dirección: </b>{{$marcas[2]->address}}<br>
                                   @else
                                   @endif

                                   @if($marcas[2]->email)  
                                   <b>E mail: </b>{{$marcas[2]->email}}<br>
                                   @else
                                   @endif

                                   @if($marcas[2]->web)
                                   <b>Sitio web : </b><a href="{{$marcas[2]->web}}" target="_blank"  style="color: #000">{{$marcas[2]->web}}</a><br>
                                   @else
                                   @endif

                                   @if($marcas[2]->phone)
                                   <b>Teléfono: </b>{{$marcas[2]->phone}}<br>
                                   @else
                                   @endif

                                   @if($marcas[2]->facebook)
                                   <b>Facebook: </b>{{$marcas[2]->facebook}}<br>
                                   @else
                                   @endif

                                   @if($marcas[2]->instagram)
                                   <b>Instagram: </b>{{$marcas[2]->instagram}}<br>
                                   @else
                                   @endif
                                </p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            @else
            @endif        
            @if($marcas[3] !==null)
                <!--MODAL 3-->
                <div class="modal" id="{{$marcas[3]->id}}">
                    <div class="impl_signin">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="impl_form">
                            <div class="container" style="padding:40px;">
                                <h1 style="color:#000; text-align: center;">Datos de la empresa</h1>
                                <br>
                                <p style="color:#000;">
                                   @if($marcas[3]->address)   
                                   <b>Dirección: </b>{{$marcas[3]->address}}<br>
                                   @else
                                   @endif

                                   @if($marcas[3]->email)  
                                   <b>E mail: </b>{{$marcas[3]->email}}<br>
                                   @else
                                   @endif

                                   @if($marcas[3]->web)
                                   <b>Sitio web : </b><a href="{{$marcas[3]->web}}" target="_blank"  style="color: #000">{{$marcas[3]->web}}</a><br>
                                   @else
                                   @endif

                                   @if($marcas[3]->phone)
                                   <b>Teléfono: </b>{{$marcas[3]->phone}}<br>
                                   @else
                                   @endif

                                   @if($marcas[3]->facebook)
                                   <b>Facebook: </b>{{$marcas[3]->facebook}}<br>
                                   @else
                                   @endif

                                   @if($marcas[3]->instagram)
                                   <b>Instagram: </b>{{$marcas[3]->instagram}}<br>
                                   @else
                                   @endif
                                </p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            @else
            @endif        
            @if($marcas[4] !==null)
                <!--MODAL 4-->
                <div class="modal" id="{{$marcas[4]->id}}">
                    <div class="impl_signin">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="impl_form">
                            <div class="container" style="padding:40px;">
                                <h1 style="color:#000; text-align: center;">Datos de la empresa</h1>
                                <br>
                                <p style="color:#000;">
                                   @if($marcas[4]->address)   
                                   <b>Dirección: </b>{{$marcas[4]->address}}<br>
                                   @else
                                   @endif

                                   @if($marcas[4]->email)  
                                   <b>E mail: </b>{{$marcas[4]->email}}<br>
                                   @else
                                   @endif

                                   @if($marcas[4]->web)
                                   <b>Sitio web : </b><a href="{{$marcas[4]->web}}" target="_blank"  style="color: #000">{{$marcas[4]->web}}</a><br>
                                   @else
                                   @endif

                                   @if($marcas[4]->phone)
                                   <b>Teléfono: </b>{{$marcas[4]->phone}}<br>
                                   @else
                                   @endif

                                   @if($marcas[4]->facebook)
                                   <b>Facebook: </b>{{$marcas[4]->facebook}}<br>
                                   @else
                                   @endif

                                   @if($marcas[4]->instagram)
                                   <b>Instagram: </b>{{$marcas[4]->instagram}}<br>
                                   @else
                                   @endif
                                </p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            @else
            @endif        
            @if($marcas[5] !==null)
                <!--MODAL 5-->
                <div class="modal" id="{{$marcas[5]->id}}">
                    <div class="impl_signin">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="impl_form">
                            <div class="container" style="padding:40px;">
                                <h1 style="color:#000; text-align: center;">Datos de la empresa</h1>
                                <br>
                                <p style="color:#000;">
                                   @if($marcas[5]->address)   
                                   <b>Dirección: </b>{{$marcas[5]->address}}<br>
                                   @else
                                   @endif

                                   @if($marcas[5]->email)  
                                   <b>E mail: </b>{{$marcas[5]->email}}<br>
                                   @else
                                   @endif

                                   @if($marcas[5]->web)
                                   <b>Sitio web : </b><a href="{{$marcas[5]->web}}" target="_blank"  style="color: #000">{{$marcas[5]->web}}</a><br>
                                   @else
                                   @endif

                                   @if($marcas[5]->phone)
                                   <b>Teléfono: </b>{{$marcas[5]->phone}}<br>
                                   @else
                                   @endif

                                   @if($marcas[5]->facebook)
                                   <b>Facebook: </b>{{$marcas[5]->facebook}}<br>
                                   @else
                                   @endif

                                   @if($marcas[5]->instagram)
                                   <b>Instagram: </b>{{$marcas[5]->instagram}}<br>
                                   @else
                                   @endif
                                </p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            @else
            @endif        
            @if($marcas[6] !==null)
                <!--MODAL 6-->
                <div class="modal" id="{{$marcas[6]->id}}">
                    <div class="impl_signin">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="impl_form">
                            <div class="container" style="padding:40px;">
                                <h1 style="color:#000; text-align: center;">Datos de la empresa</h1>
                                <br>
                                <p style="color:#000;">
                                   @if($marcas[6]->address)   
                                   <b>Dirección: </b>{{$marcas[6]->address}}<br>
                                   @else
                                   @endif

                                   @if($marcas[6]->email)  
                                   <b>E mail: </b>{{$marcas[6]->email}}<br>
                                   @else
                                   @endif

                                   @if($marcas[6]->web)
                                   <b>Sitio web : </b><a href="{{$marcas[6]->web}}" target="_blank"  style="color: #000">{{$marcas[6]->web}}</a><br>
                                   @else
                                   @endif

                                   @if($marcas[6]->phone)
                                   <b>Teléfono: </b>{{$marcas[6]->phone}}<br>
                                   @else
                                   @endif

                                   @if($marcas[6]->facebook)
                                   <b>Facebook: </b>{{$marcas[6]->facebook}}<br>
                                   @else
                                   @endif

                                   @if($marcas[6]->instagram)
                                   <b>Instagram: </b>{{$marcas[6]->instagram}}<br>
                                   @else
                                   @endif
                                </p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            @else
            @endif        
            @if($marcas[7] !==null)
                <!--MODAL 7-->
                <div class="modal" id="{{$marcas[7]->id}}">
                    <div class="impl_signin">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <div class="impl_form">
                            <div class="container" style="padding:40px;">
                                <h1 style="color:#000; text-align: center;">Datos de la empresa</h1>
                                <br>
                                <p style="color:#000;">
                                   @if($marcas[7]->address)   
                                   <b>Dirección: </b>{{$marcas[7]->address}}<br>
                                   @else
                                   @endif

                                   @if($marcas[7]->email)  
                                   <b>E mail: </b>{{$marcas[7]->email}}<br>
                                   @else
                                   @endif

                                   @if($marcas[7]->web)
                                   <b>Sitio web : </b><a href="{{$marcas[7]->web}}" target="_blank"  style="color: #000">{{$marcas[7]->web}}</a><br>
                                   @else
                                   @endif

                                   @if($marcas[7]->phone)
                                   <b>Teléfono: </b>{{$marcas[7]->phone}}<br>
                                   @else
                                   @endif

                                   @if($marcas[7]->facebook)
                                   <b>Facebook: </b>{{$marcas[7]->facebook}}<br>
                                   @else
                                   @endif

                                   @if($marcas[7]->instagram)
                                   <b>Instagram: </b>{{$marcas[7]->instagram}}<br>
                                   @else
                                   @endif
                                </p>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            @else
            @endif        
    </div>
          
 
    <!------ Counter Section  ------>
    <div class="impl_counter_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="impl_cont_box">
                        <div class="impl_count_img">
                            <img src="template/images/svg/brand.png" alt="" />
                        </div>
                        <div class="impl_count_text">
                           
                            <h1 class="count-no" data-to="40" data-speed="1000">40</h1>
                            <p>Marcas confirmadas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="impl_cont_box">
                        <div class="impl_count_img">
                            <img src="template/images/svg/bussiness-man.png" alt="" />
                        </div>
                        <div class="impl_count_text">
                            <h1 class="count-no" data-to="6" data-speed="1000">6</h1>
                            <p>Conferencias</p>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>

    <!------ Exhibitor form ------>
    <div class="impl_query_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="impl_heading">
                        <h1>VUÉLVETE EXPOSITOR</h1>
                    </div>
                    <form action="{{route('expositorform')}}" method="POST">
                        @csrf
                        <input type="text" name="capcha" hidden="">
                    <div class="impl_query_form">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="input-group">
                                    <input type="text" class="form-control require" name="name" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="input-group">
                                    <input type="text" class="form-control require" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="input-group">
                                    <textarea class="form-control" name="message" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <input type="hidden" name="form_type" value="contact">
                               <button type="submit" class="impl_btn submitForm" >Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="impl_query_img">
                        @forelse($image_exhibitor as $imagen)
                        <img src="{{$imagen->photo->getUrl()}}" style="width: 570px; height:423px; object-fit: contain;" alt="" class="img-fluid" />
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script type="text/javascript" src="template/js/appear.min.js"></script>
    <script type="text/javascript" src="template/js/plugin/counter/jquery.countTo.js"></script>
@endsection

@endsection