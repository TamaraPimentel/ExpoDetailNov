<!DOCTYPE html>
<html lang="es">
	@include('partials.header')
<body id="top">
	@include('partials.preloader')
	@include('partials.nav')
	@include('partials.topimage')
	@yield('content')
	@include('partials.footer')
	@include('partials.scripts')
</body>
</html>