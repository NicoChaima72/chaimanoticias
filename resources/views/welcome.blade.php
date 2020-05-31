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

<body class="bg-gray-100 h-screen antialiased leading-none">
	<header class="w-full text-gray-700">
		<div class="flex justify-between items-center shadow-sm py-2 lg:py-4 px-1 md:px-10 lg:px-10 bg-white">
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
			<div class="flex lg:justify-center flex-none">
				<div class="cursor-pointer">
					<img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-full rounded-lg">
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
		<div class="hidden lg:flex mx-8 bg-white items-center justify-between px-5 py-3 space-x-10">
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