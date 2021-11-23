@extends('layouts.pagesapp')
@section('content')
@section('titulo')
Conferencias Magistrales
@endsection

   <!------ Benefits ------>
    <div class="impl_welcome_wrapper impl_bottompadder80" style="padding-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    @forelse($multimedia as $imagen)
                    <div class="impl_welcome_img" style="margin-top: 70px;">
                        <img src="{{$imagen->image->getUrl()}}" style="width:535px; height:261px; object-fit:cover;">
                    </div>
                    @empty
                    @endforelse
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="impl_welcome_text">
                        <h1>Ventajas</h1>
                        <div class="panel-group" id="accordion">
                        
                            @forelse($benefits as $beneficio)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#{{$beneficio->id}}">{{$beneficio->question}}</a></h4>
                                </div>
                                <div id="{{$beneficio->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                       {!!$beneficio->answer!!}
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <!------ Exponents ------>
	<div class="impl_purchase_inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
	                <div class="impl_heading">  
	                	<h1>LOS CONFERENCISTAS</h1>                    
	                </div>
	            </div>
				<div class="col-1"></div>
				<div class="col-10" >

				    <div class="row">
				    	@forelse($expositor as $persona)
				        <div class="col-lg-4 col-md-6">
				            <div class="impl_fea_car_box card-flip">
				                <div class="impl_fea_car_img">
				                    <img src="{{$persona->photo->getUrl()}}" style="width:300px; height:300px; object-fit: contain;" alt="" class="img-fluid impl_frst_car_img" />
				                    <img src="/template/images/flyer.jpg" style="width:320px; height:320px;object-fit: cover;" alt="" class="img-fluid impl_hover_car_img" />
				                    <span class="impl_img_tag" title="Ver CV">
				                    	<a href="#modal{{$persona->id}}"  data-toggle="modal"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
				                    </span>
				                </div>
				                <div class="impl_fea_car_data" style="height:200px;">
				                    <h2><a href="#modal{{$persona->id}}"  data-toggle="modal">{{$persona->name}}</a></h2>
				                    <ul>
				                        <li style="color:#f15b5a;">
				                            <span class="impl_fea_name">{{$persona->topic}}</span></li>
				                        <li>
				                            <span class="impl_fea_name">{{$persona->date}}</span></li>
				                    </ul>
				                    {{--<div class="impl_fea_btn">
				                        <button class="impl_btn"><span class="impl_doller">$ 72000 </span><span class="impl_bnw">buy now</span></button>
				                    </div>--}}
				                </div>
				            </div>
				        </div>
				        @empty
					    @endforelse

					    @forelse($expositor as $persona)
						<!--MODAL-->
							<div class="modal" id="modal{{$persona->id}}">
								<div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLongTitle" style="color:#000;">Currículum</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body" style="color:#000;">
								         {!!$persona->curriculum!!} 
								      </div>

								    </div>
								 </div>		
							</div> 
						@empty
					    @endforelse 
						<!--pagination start-->
						<div class="col-lg-12 col-md-12">
						    <div class="row">
						        <div class="col-lg-12 col-md-12">
						            <div class="text-center" style="padding:30px 0 30px 0;">{{$expositor->links()}}</div>
						        </div>
							</div>
						</div>
					
					</div>
					    
				</div>
				<div class="col-1"></div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 text-center">
	                <p>	Interesados enviar correo o ponerse en contacto  por Whastapp para ver disponibilidad y reservaciones.</p>                     
	            </div>
			</div>
		</div>
	</div>
@endsection