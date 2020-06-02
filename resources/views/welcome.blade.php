<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="theme-color" content="#2B6CB0">
	<link rel="apple-touch-startup-image" href="{{ asset('img/logo.png') }}">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="icon" href="{{ asset('img/icono.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('img/icono.png') }}">
	<meta name="msapplication-square310x310logo" content="{{ asset('img/icono.png') }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<script src="https://kit.fontawesome.com/55d8731b80.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 h-screen antialiased leading-none text-gray-900 cursor-default">
	<header class="w-full text-gray-700 bg-white fixed z-10">
		<div class="container mx-auto flex justify-between items-center shadow-sm py-2 px-2 md:px-0 md:py-4">
			<div class="hidden lg:block flex-1">
				<ul class="flex space-x-16">
					<li class="cursor-pointer">
						<i class="fas fa-bars text-2xl text-gray-900"></i>
					</li>
					<li class="flex flex-col items-center space-x-1 cursor-pointer">
						<i class="far fa-bookmark text-md"></i>
						<p class="text-xs">Guardadas</p>
					</li>
				</ul>
			</div>
			<div class="flex lg:justify-center flex-none w-2/3 md:w-auto">
				<div class="cursor-pointer w-full">
					<img src="{{ asset('img/logo.png') }}" alt="Logo" class="rounded-lg w-full" width="100%">
				</div>
			</div>
			<ul class="flex space-x-3 mr-3 items-center block lg:hidden">
				<li class="cursor-pointer">
					<i class="fas fa-search text-xl text-blue-700"></i>
				</li>
				<li class="cursor-pointer">
					<i class="fas fa-bars text-2xl text-gray-900"></i>
				</li>
			</ul>
			<div class="hidden lg:block flex-1">
				<ul class="flex space-x-5 justify-end">
					<li class="flex items-center space-x-1 cursor-pointer">
						<i class="far fa-file text-xl"></i>
						<p class="text-sm">Suscribete</p>
					</li>
					<li class="flex items-center space-x-1 cursor-pointer">
						<i class="far fa-user text-xl"></i>
						<p class="text-sm">Ingresar</p>
					</li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="container mx-auto hidden lg:flex mx-8 bg-white items-center justify-between py-3 px-2 space-x-16">
			<div class="w-full">
				<ul class="flex justify-between text-sm">
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Portada</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Nacional</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Mundo</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Tendencias</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Calidad de vida</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Deportes</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Dato útil</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Noticieros</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Reportajes</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Entrevistas</a>
					</li>
					<li>
						<a href="" class="hover:text-gray-600 cursor-pointer">Videos</a>
					</li>
				</ul>
			</div>
			<div class="cursor-pointer">
				<i class="fas fa-search text-blue-700 text-xl"></i>
			</div>
		</div>
	</header>
	<nav class="grid lg:hidden grid-cols-2 bg-white py-4 w-full fixed bottom-0 z-10 border-t">
		<li class="flex items-center justify-center space-x-2 cursor-pointer">
			<i class="far fa-file text-lg font-light"></i>
			<p class="text-sm font-semibold">Noticias</p>
		</li>
		<li class="flex items-center justify-center space-x-2 cursor-pointer">
			<i class="far fa-bookmark text-lg"></i>
			<p class="text-sm">Guardadas</p>
		</li>
	</nav>

	<div class="py-8 lg:py-16"></div>

	<section class="container destacadas mx-auto lg:mt-4">
		<article class="destacadas__principal bg-white m-3 md:m-0">
			<div class="grid grid-cols-12">
				<div class="destacadas__principal__imagen col-span-12 md:col-span-7">
					<img src="http://placeimg.com/1000/600/any" alt="" width="1000" height="600">
					<div
						class="destacadas__principal__informacion__cabecera flex md:hidden w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white">
						<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
						<i class="far fa-bookmark text-lg cursor-pointer hover:text-gray-700"></i>
					</div>
				</div>
				<div class="destacadas__principal__informacion col-span-12 md:col-span-5">
					<div class="hidden md:flex justify-between pt-4 pb-2 pl-4 pr-6">
						<span class="font-semibold cursor-pointer hover:text-gray-700">Mundo</span>
						<i class="far fa-bookmark text-xl cursor-pointer hover:text-gray-700"></i>
					</div>
					<div class="destacadas__principal__informacion__cuerpo p-4 pb-6 bg-white rounded-sm">
						<h3 class="font-semibold text-2xl lg:text-3xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha
							tenido contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
						</div>
					</div>
				</div>
			</div>
		</article>

		<div class="destacadas__secundarias grid grid-cols-1 md:grid-cols-3 gap-4">
			<article class="noticia bg-white m-3 md:m-0">
				<div class="noticia__imagen">
					<img src="http://placeimg.com/1000/600/any" alt="" width="1000" height="600">
					<div class="noticia__informacion__cabecera flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white">
						<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
						<i class="far fa-bookmark text-lg cursor-pointer hover:text-gray-700"></i>
					</div>
				</div>
				<div class="noticia__informacion">
					<div class="p-4 pb-6">
						<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
							contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
						</div>
					</div>
				</div>
			</article>
			<article class="noticia bg-white m-3 md:m-0">
				<div class="noticia__imagen">
					<img src="http://placeimg.com/1000/600/any" alt="" width="1000" height="600">
					<div class="noticia__informacion__cabecera flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white">
						<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
						<i class="far fa-bookmark text-lg cursor-pointer hover:text-gray-700"></i>
					</div>
				</div>
				<div class="noticia__informacion">
					<div class="p-4 pb-6">
						<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
							contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
						</div>
					</div>
				</div>
			</article>
			<article class="noticia bg-white m-3 md:m-0">
				<div class="noticia__imagen">
					<img src="http://placeimg.com/1000/600/any" alt="" width="1000" height="600">
					<div class="noticia__informacion__cabecera flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white">
						<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
						<i class="far fa-bookmark text-lg cursor-pointer hover:text-gray-700"></i>
					</div>
				</div>
				<div class="noticia__informacion">
					<div class="p-4 pb-6">
						<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
							contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
						</div>
					</div>
				</div>
			</article>
		</div>









		<div class="destacadas__ultimas">
			<div class="flex w-full items-center space-x-2 pl-3">
				<i class="far fa-clock fa-spin text-4xl spinner text-blue-700"></i>
				<h2 class="text-3xl font-medium">Lo último</h2>
			</div>
			<div class="timeline flex justify-start lg:justify-end ml-6 pl-1 lg:p-0">
				<ul>
					<li class="cursor-pointer">
						<article class="flex justify-between bg-white mt-5 mr-2 md:mr-0 pl-3">
							<div class="p-2">
								<span class="font-medium text-base text-blue-700">14:00 hrs</span>
								<p class="mt-1 text-sm md:text-lg lg:text-xs xl:text-sm">OS-7 detiene a miembros de mafia italiana que
									internaban cocaína en motos a Chile</p>
							</div>
							<div class="ultimas__noticia__imagen" style=" background-image: url('http://placeimg.com/1000/600/any');
												background-position: center center;
												background-repeat: no-repeat;
												background-size: cover;">
							</div>
						</article>
						<span class="icono">
					</li>
					<li class="cursor-pointer">
						<article class="flex justify-between bg-white mt-5 mr-2 md:mr-0 pl-3">
							<div class="p-2">
								<span class="font-medium text-base text-blue-700">14:00 hrs</span>
								<p class="mt-1 text-sm md:text-lg lg:text-xs xl:text-sm">OS-7 detiene a miembros de mafia italiana que
									internaban cocaína en motos a Chile</p>
							</div>
							<div class="ultimas__noticia__imagen" style=" background-image: url('http://placeimg.com/1000/600/any');
												background-position: center center;
												background-repeat: no-repeat;
												background-size: cover;">
							</div>
						</article>
						<span class="icono">
					</li>
					<li class="cursor-pointer">
						<article class="flex justify-between bg-white mt-5 mr-2 md:mr-0 pl-3">
							<div class="p-2">
								<span class="font-medium text-base text-blue-700">14:00 hrs</span>
								<p class="mt-1 text-sm md:text-lg lg:text-xs xl:text-sm">OS-7 detiene a miembros de mafia italiana que
									internaban cocaína en motos a Chile</p>
							</div>
							<div class="ultimas__noticia__imagen" style=" background-image: url('http://placeimg.com/1000/600/any');
												background-position: center center;
												background-repeat: no-repeat;
												background-size: cover;">
							</div>
						</article>
						<span class="icono">
					</li>
					<li class="cursor-pointer">
						<article class="flex justify-between bg-white mt-5 mr-2 md:mr-0 pl-3">
							<div class="p-2">
								<span class="font-medium text-base text-blue-700">14:00 hrs</span>
								<p class="mt-1 text-sm md:text-lg lg:text-xs xl:text-sm">OS-7 detiene a miembros de mafia italiana que
									internaban cocaína en motos a Chile</p>
							</div>
							<div class="ultimas__noticia__imagen" style=" background-image: url('http://placeimg.com/1000/600/any');
												background-position: center center;
												background-repeat: no-repeat;
												background-size: cover;">
							</div>
						</article>
						<span class="icono">
					</li>
					<li class="cursor-pointer">
						<article class="flex justify-between bg-white mt-5 mr-2 md:mr-0 pl-3">
							<div class="p-2">
								<span class="font-medium text-base text-blue-700">14:00 hrs</span>
								<p class="mt-1 text-sm md:text-lg lg:text-xs xl:text-sm">OS-7 detiene a miembros de mafia italiana que
									internaban cocaína en motos a Chile</p>
							</div>
							<div class="ultimas__noticia__imagen" style=" background-image: url('http://placeimg.com/1000/600/any');
												background-position: center center;
												background-repeat: no-repeat;
												background-size: cover;">
							</div>
						</article>
						<span class="icono">
					</li>
				</ul>
			</div>
			<button
				class="bg-transparent text-blue-700 hover:text-blue-500 border border-blue-700 hover:border-blue-500 rounded mt-5 w-1/2 mx-auto block py-2">
				Ver más <i class="fas fa-angle-right text-xs"></i>
			</button>
		</div>
	</section>

	<footer class="bg-gray-300 mt-8 pt-16 pb-24  lg:py-16">
		<div class="flex flex-col justify-center items-center max-w-xs mx-auto">
			<img src="{{ asset('img/logo-oscuro.png') }}" alt="Logo" class="rounded-lg w-3/4">
		</div>
		<p class="text-md md:text-lg text-gray-900 font-semibold text-center mt-4">
			CHAIMANOTICIAS<span class="hidden md:inline-block"> - Todos los derechos reservados</span> &copy; 2020
		</p>
	</footer>

	{{-- <div class="flex flex-col">
		@if(Route::has('login'))
		<div class="absolute top-0 right-0 mt-4 mr-4">
			@auth
			<a href="{{ url('/home') }}"
	class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
	@else
	<a href="{{ route('login') }}"
		class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>
	@if (Route::has('register'))
	<a href="{{ route('register') }}"
		class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
	@endif
	@endauth
	</div>
	@endif
	<div class="min-h-screen flex items-center justify-center">
		<div class="flex flex-col justify-around h-full">
			<div>
				<h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">
					{{ config('app.name', 'Laravel') }}
				</h1>
				<ul class="list-reset">
					<li class="inline pr-8">
						<a href="https://laravel.com/docs"
							class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
							title="Documentation">Documentation</a>
					</li>
					<li class="inline pr-8">
						<a href="https://laracasts.com"
							class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
							title="Laracasts">Laracasts</a>
					</li>
					<li class="inline pr-8">
						<a href="https://laravel-news.com"
							class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="News">News</a>
					</li>
					<li class="inline pr-8">
						<a href="https://nova.laravel.com"
							class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Nova">Nova</a>
					</li>
					<li class="inline pr-8">
						<a href="https://forge.laravel.com"
							class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Forge">Forge</a>
					</li>
					<li class="inline pr-8">
						<a href="https://vapor.laravel.com"
							class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Vapor">Vapor</a>
					</li>
					<li class="inline pr-8">
						<a href="https://github.com/laravel/laravel"
							class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="GitHub">GitHub</a>
					</li>
					<li class="inline pr-8">
						<a href="https://tailwindcss.com"
							class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
							title="Tailwind Css">Tailwind CSS</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	</div> --}}
</body>

</html>