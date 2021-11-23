     <!------ Footer Section Start ------>
    @php
    $footerinfo=App\Models\ContactCompany::latest()->take(1)->get();
    $breadcrumbfooter=App\Models\HeaderPhoto::latest()->take(1)->get();
    @endphp
    @forelse($footerinfo as $footer)
        @forelse($breadcrumbfooter as $foot)
    <div class="impl_footer_wrapper" style="background-image: url({{$foot->upper_photo->getUrl()}});">
        @empty
        @endforelse
       {{-- <div class="impl_social_wrapper">
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div> --}}
        <div class="impl_foo_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="impl_foo_box footer_abt_text">
                            <a href="/"><img src="{{$footer->company_logo->getUrl()}}" alt="" style="height:80px;"></a>
                            <p>{{$footer->description}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="impl_foo_box">
                            <h1 class="impl_foo_title">Contacto</h1>
                            <ul>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">
                                        <p>{{$footer->company_phone}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">
                                    
                                        <p>{{$footer->company_address}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="impl_foo_icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    <div class="impl_foo_text">
                                        <a href="mailto: {{$footer->company_email}}">{{$footer->company_email}}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4  col-sm-12">
                        <div class="impl_foo_box">
                            <h1 class="impl_foo_title">Redes Sociales</h1>
                             <ul class="impl_header_social">
                                  @if($footer->facebook_url)
                                <li>
                                    <a href="{{$footer->facebook_url}}"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        facebook
                                    </a>
                                </li>
                                @endif

                                @if($footer->tiktok_url)
                                <li>
                                    <a href="{{$footer->tiktok_url}}"><i class="fa fa-deviantart" aria-hidden="true"></i>
                                        tiktok
                                    </a>
                                </li>
                                @endif

                                @if($footer->instagram_url)
                                <li>
                                    <a href="{{$footer->instagram_url}}"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        instagram
                                    </a>
                                </li>
                                @endif

                                @if($footer->youtube_url)
                                <li>
                                    <a href="{{$footer->youtube_url}}"><i class="fa fa-youtube" aria-hidden="true"></i>
                                        youtube
                                    </a>
                                </li>
                                @endif

                                @if($footer->twitter_url) 
                                <li>
                                    <a href="{{$footer->twitter_url}}"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        twitter
                                    </a>
                                </li> 
                                @endif

                                @if($footer->other_url)
                                <li>
                                    <a href="{{$footer->other_url}}"><i class="fa fa-plus" aria-hidden="true"></i>
                                        otra
                                    </a>
                                </li>
                                @endif
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
                    <p class="impl_copyright">Expo Detail Mexico&copy; 2021 por: <a href="https://www.behance.net/tamyxp" target="_blank">Tamara Pimentel</a></p><br>
                    <p>
                        <a href="{{route('terminos')}}"style="text-decoration: underline;" target="_blank">Términos y Condiciones</a> |
                        <a href="{{route('aviso')}}"style="text-decoration: underline;" target="_blank">Avíso de privacidad</a>
                    </p>
                </div>
            </div>
        </div>      
    </div>
    @empty
    @endforelse
