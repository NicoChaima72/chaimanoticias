<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="theme-color" content="#343A40">
  <meta name="msapplication-square310x310logo" content="{{ asset('img/icono.png') }}">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="description" content="Iniciar sesion">

  <link rel="apple-touch-startup-image" href="{{ asset('img/logo.png') }}">
  <link rel="icon" href="{{ asset('img/icono.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('img/icono.png') }}">

  <title>{{ config('app.name') }} ADM - Iniciar sesion</title>

  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://kit.fontawesome.com/55d8731b80.js" crossorigin="anonymous"></script>
</head>

<body class="hold-transition login-page">
  <div class="mt-5 pt-5">
    <div class="login-logo">
      <a href="{{ route('pages.home') }}"><b>Chaima</b>NOTICIAS</a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Ingresa tus datos para iniciar sesion</p>

        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="mb-3">
            <div class="input-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" autofocus>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            @error('email')
            <span class="d-block text-danger" role="alert">
              <small>{{ $message }}</small>
            </span>
            @enderror
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('password')
            <span class="d-block text-danger" role="alert">
              <small>{{ $message }}</small>
            </span>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                  Recuerdame
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </div>
          </div>
        </form>
        <p class="mb-1">
          <a href="forgot-password.html">Olvidé mi contraseña</a>
        </p>
      </div>
    </div>
  </div>
  <script src="/adminlte/js/jquery.min.js"></script>
  <script src="/adminlte/js/bootstrap.bundle.min.js"></script>
  <script src="/adminlte/js/adminlte.min.js"></script>
</body>

</html>





{{-- @extends('layouts.app')

@section('content')
<div class="container mx-auto">
  <div class="flex flex-wrap justify-center">
	<div class="w-full max-w-sm">
	  <div class="flex flex-col break-words bg-white border-2 rounded shadow-md">

		<div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
		  {{ __('Login') }}
</div>

<form class="w-full p-6" method="POST" action="{{ route('login') }}">
  @csrf

  <div class="flex flex-wrap mb-6">
    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
      {{ __('E-Mail Address') }}:
    </label>

    <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
    <p class="text-red-500 text-xs italic mt-4">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div class="flex flex-wrap mb-6">
    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
      {{ __('Password') }}:
    </label>

    <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required>

    @error('password')
    <p class="text-red-500 text-xs italic mt-4">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div class="flex mb-6">
    <label class="inline-flex items-center text-sm text-gray-700" for="remember">
      <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
      <span class="ml-2">{{ __('Remember Me') }}</span>
    </label>
  </div>

  <div class="flex flex-wrap items-center">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
      {{ __('Login') }}
    </button>

    @if (Route::has('password.request'))
    <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto" href="{{ route('password.request') }}">
      {{ __('Forgot Your Password?') }}
    </a>
    @endif

    @if (Route::has('register'))
    <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
      {{ __("Don't have an account?") }}
      <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
        {{ __('Register') }}
      </a>
    </p>
    @endif
  </div>
</form>

</div>
</div>
</div>
</div>
@endsection --}}
