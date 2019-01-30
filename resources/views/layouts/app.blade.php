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
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="orange">
<div id="app">

  <ul id="userMenu" class="dropdown-content">
    <li>
      <a href="{{ route('logout') }}"
         onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>

  <nav>
    <div class="nav-wrapper grey darken-4">
      <a class="brand-logo" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

      <!-- Right Side Of Navbar -->
      <ul class="right hide-on-med-and-down">
        <!-- Authentication Links -->
        @guest
          <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
          <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
          <li>
            <a class="dropdown-trigger" href="#" data-target="userMenu">
              {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i>
            </a>
          </li>
        @endguest
      </ul>
    </div>
  </nav>

  <main class="container">
    @yield('content')
  </main>
</div>
</body>
</html>
