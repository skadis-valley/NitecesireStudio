<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('home')}}">Nitecesire Studio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('product')}}">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>
            

            @guest
            <li><a class="nav-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a class="nav-item" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
            
            @endguest
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">

             @if (Route::has('login'))
             <div class="top-right links">
              @auth
              <a href="{{ url('/home') }}">Home</a>
              @else
              <a href="{{ route('login') }}">Login</a>
              <a href="{{ route('register') }}">Register</a>
              @endauth
            </div>
            @endif
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('contentHome')

</div>
</body>
</html>


