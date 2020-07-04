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
  <meta name="description" content="@yield('description', 'Administracion del mejor noticiero del mundo')">

  <link rel="apple-touch-startup-image" href="{{ asset('img/logo.png') }}">
  <link rel="icon" href="{{ asset('img/icono.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('img/icono.png') }}">

  <title>{{ config('app.name') }} ADM - @yield('title', 'Dashboard')</title>

  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://kit.fontawesome.com/55d8731b80.js" crossorigin="anonymous"></script>
  @stack('links')

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-outline-danger btn-sm">Cerrar Sesion</button>
        </form>
      </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="../../index3.html" class="brand-link">
        <span class="brand-text font-weight-bold pl-3">Chaima<span class="font-weight-light">NOTICIAS</span></span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>
        @include('admin.partials.nav')
      </div>
    </aside>


    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>@yield('content-title')</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        @yield('content')
      </section>
    </div>
    @include('admin.partials.footer')
  </div>

  <script src="/adminlte/js/jquery.min.js"></script>
  <script src="/adminlte/js/bootstrap.bundle.min.js"></script>
  <script src="/adminlte/js/adminlte.min.js"></script>
  @stack('scripts')
</body>

</html>