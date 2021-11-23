    <!------ Preloader Start ------>
    @php
    $loader=App\Models\ContactContact::latest()->take(1)->get();
    @endphp
    @forelse($loader as $logotipo)
    <div id="preloader">
        <div id="status">
            <img src="{{$logotipo->logo->getUrl()}}" alt="" />
            <div class="loader">
                Cargando...
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
    @empty
    @endforelse