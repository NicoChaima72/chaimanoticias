<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chaimanoticias - Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55d8731b80.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <link rel="stylesheet" href="/adminlte/css/icheck-bootstrap.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Chaima</b>NOTICIAS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa tus datos para iniciar sesion</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuerdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Olvidé mi contraseña</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/adminlte/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
</body>
</html>














































{{-- @extends('layouts.app')

@section('content')
<div class="container mx-auto">
  <div class="flex flex-wrap justify-center">
    <div class="w-full max-w-sm">
      <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

        <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
          {{ __('Login') }}
        </div>

        <form class="w-full p-6" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="flex flex-wrap mb-6">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
              {{ __('E-Mail Address') }}:
            </label>

            <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror"
              name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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

            <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror"
              name="password" required>

            @error('password')
            <p class="text-red-500 text-xs italic mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>

          <div class="flex mb-6">
            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
              <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                {{ old('remember') ? 'checked' : '' }}>
              <span class="ml-2">{{ __('Remember Me') }}</span>
            </label>
          </div>

          <div class="flex flex-wrap items-center">
            <button type="submit"
              class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
            <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto"
              href="{{ route('password.request') }}">
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