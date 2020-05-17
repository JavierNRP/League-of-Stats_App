<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Barra de navegación -->
    <header>
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/leagueoflegends_94793.svg') }}" width="50" height="50" class="d-inline-block align-top" alt="Logo de League of Stats. Barra de navegación">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CAMPEONES</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="menuDesplegableDescubrir" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  DESCUBRIR
                </a>
                <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="menuDesplegableDescubrir">
                  <a class="dropdown-item" href="#">ESTADÍSTICAS</a>
                  <a class="dropdown-item" href="#">ROTACIÓN GRATUITA SEMANAL</a>
                  <a class="dropdown-item" href="#">ESTADO DEL SERVIDOR</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACTO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SOBRE NOSOTROS</a>
              </li>
            </ul>
            <div class="ml-auto">
              @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a href="{{ url('/home') }}">INICIO</a>
                      @else
                          <button class="btn my-2 text-light botonInicioSesion"><a href="{{ route('login') }}">INICIA SESIÓN</a></button>
                          @if (Route::has('register'))
                          <button class="botonRegistro"><a href="{{ route('register') }}">REGÍSTRATE</a></button>
                          @endif
                      @endauth
                  </div>
              @endif
            </div>
          </div>
        </nav>
      </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
