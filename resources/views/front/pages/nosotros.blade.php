@extends('layouts.pagesapp')
@section('content')
@section('titulo')
Nosotros
@endsection

    <!------ About Us ------>
    <div class="impl_about_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                	@forelse($description as $nosotros)
                    <div class="impl_about_data">
                        <h2>{{$nosotros->tittle}}</h2>
                        <p>{!!$nosotros->description!!}</p>
                    </div>
                    @empty
                	@endforelse
                </div>
                <div class="col-lg-6 col-md-12">
                	@forelse($des_photo as $photo)
                    <div class="impl_progress_wrapper">
                 		<img src="{{$photo->photo->getUrl()}}" style="width:100%; height:400px; object-fit:contain;">
                    </div>
                    @empty
                	@endforelse
                </div>
            </div>
        </div>
    </div>
  
    <!------ Through time------>
    <div class="impl_service_wrapper impl_faq_wrapper">
        <div class="impl_service_video">
            <div class="impl_video_inner">
                @forelse($video_thru as $video)
                <div class="impl_servdo_video">
                    <span class="impl_play_icon"><a class="impl-popup-youtube" href="//www.youtube.com/watch?v={{$video->video_url}}"><i class="fa fa-play" aria-hidden="true"></i></a></span>
                </div>
                @empty
                @endforelse
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 offset-lg-6">
                    <div class="impl_welcome_text">
                        <h1>Eventos a través del tiempo</h1>
                        <div class="impl_timeline_wrapper">
                                <ul class="impl_timeline">
                                    @forelse($thru as $atraves)
                                        @if($loop->index % 2)
                                    <li>  
                                        <div class="impl_tl_item">
                                            <h2>{{$atraves->title}}</h2>
                                            <p>{!!$atraves->description!!}</p>
                                            <span class="impl_tl_icon">
                                            	<img src="{{$atraves->icon->getUrl()}}" style="width:20px;">   
                                            </span>
                                        </div>     
                                    </li>
                                        @else
                                    <li>
                                        <div class="impl_tl_item impl_tl_item_rt">
                                            <h2>{{$atraves->title}}</h2>
                                            <p>{!!$atraves->description!!}</p>
                                            <span class="impl_tl_icon">
                                            	<img src="{{$atraves->icon->getUrl()}}" style="width:20px;">   
                                            </span>
                                        </div> 
                                    </li>
                                        @endif
                                    @empty
                                    @endforelse
                            
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Testimonials ------>
    <div class="impl_test_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>¿Qué opina la gente?</h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="impl_test_slider">
                    	@forelse($testimonial as $opinion)
                        <div class="item">
                            <div class="impl_test_slider_box">	
                                <div class="impl_test_data">
                                    <div class="impl_test_img">
                                        <img src="{{$opinion->photo->getUrl()}}" alt="" />
                                    </div>
                                    <p><span class="impl_test_quote"><img src="template/images/svg/quotes.svg" alt=""></span>{{$opinion->quote}}</p>
                                    <div class="impl_test_footer">
                                        - {{$opinion->name}}
                                    </div>
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


@endsection