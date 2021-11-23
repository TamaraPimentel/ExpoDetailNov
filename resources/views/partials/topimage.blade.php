    <!------ Breadcrumbs Start ------>
    @php
    $breadcrumb=App\Models\HeaderPhoto::latest()->take(1)->get();
    @endphp 
    @forelse($breadcrumb as $topimagen) 
        <div class="impl_bread_wrapper" style="background-image: url({{$topimagen->upper_photo->getUrl()}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>@yield('titulo')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">
                            @yield('titulo')
                        </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    @empty
    @endforelse    
