<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="theme-color" content="#2B6CB0">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="msapplication-square310x310logo" content="{{ asset('img/icono.png') }}">
	<meta name="description" content="@yield('description', 'Las últimas noticias del mundo mundial')">

	<link rel="apple-touch-startup-image" href="{{ asset('img/logo.png') }}">
	<link rel="icon" href="{{ asset('img/icono.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('img/icono.png') }}">

	<title>{{ config('app.name') }}  -  @yield('title', 'Principales noticias')</title>
	
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">

	<script src="{{ mix('js/app.js') }}"></script>
	<script src="https://kit.fontawesome.com/55d8731b80.js" crossorigin="anonymous"></script>
</head>

<body id="body" class="bg-gray-100 h-screen antialiased leading-none text-gray-900 cursor-default">

	@include('partials.header')
	@include('partials.nav-button')

	<div class="container">
		@yield('content')
	</div>

	@include('partials.footer')

	

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































{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="bg-blue-900 shadow mb-8 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</body>
</html> --}}
