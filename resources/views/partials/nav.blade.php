  <!------ Header Start ------>
   @php
     $headerinfo=App\Models\ContactContact::latest()->take(1)->get();
   @endphp
    @forelse($headerinfo as $header)
    <div class="impl_header_wrapper">
        <div class="impl_logo">
            <a href="/"><img src="{{$header->logo->getUrl()}}" alt="Logo" class="img-fluid" style="width:100%; height:80px;"></a>
        </div>
        <div class="impl_top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="impl_top_info">
                            <ul class="impl_header_social">
                                @if($header->facebook_url)
                                <li>
                                    <a href="{{$header->facebook_url}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                @endif

                                @if($header->tiktok_url)
                                <li>
                                    <a href="{{$header->tiktok_url}}"><i class="fa fa-deviantart" aria-hidden="true"></i></a>
                                </li>
                                @endif

                                @if($header->instragram_url)
                                <li>
                                    <a href="{{$header->instragram_url}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                @endif

                                @if($header->youtube_url)
                                <li>
                                    <a href="{{$header->youtube_url}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </li>
                                @endif

                                @if($header->twitter_url) 
                                <li>
                                    <a href="{{$header->twitter_url}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li> 
                                @endif

                                @if($header->other_url)
                                <li>
                                    <a href="{{$header->other_url}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </li>
                                @endif
                           
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
                                <a href="/"><img src="{{$header->logo->getUrl()}}" alt="Logo" class="img-fluid" style="width:100px; height:80px; object-fit:contain;"></a>
                            </div>
                            <a href="https://goo.gl/maps/HGw7YQkhYapZRAvL6" target="_blank" class="impl_btn">Conoce la sede</a>
                            <div class="impl_menu">
                                <nav>
                                    <div class="menu_cross">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                    <ul>
                                        <li><a href="/" class="active">Inicio</a>
                                        </li>
                                        <li><a href="{{route('us')}}">Nosotros</a></li>
                                        <li><a href="{{route('brands')}}">Marcas</a>
                                        </li>
                                        <li class="dropdown"><a>Cronograma</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('cronogram')}}">Horarios</a></li>
                                                <li><a href="{{route('exhibitor')}}">Conferencistas</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('contact')}}">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    @endforelse