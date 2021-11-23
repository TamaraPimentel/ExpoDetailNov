 <!DOCTYPE html>
<html lang="es">
	@include('partials.header')
<body id="top">
	@include('partials.preloader')
	@include('partials.nav')
	@yield('content')
	@include('partials.footer')
	@include('partials.scripts')
</body>
</html>