<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/2-col-portfolio.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css')}}">

    <title>Nitecesire Studio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/modern-business.css" rel="stylesheet">



</head>
<body style="margin-top:0%;">
    <div id="app">
        <div>
            <header class="header trans_300">
                <div class="main_nav_container">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <div class="logo_container">
                                    <a href="#">Nitecesire<span>studio</span></a>
                                </div>
                                <nav class="navbar">
                                    <ul class="navbar_menu">
                                        <li><a href="/order">Order</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                        @if (Route::has('login'))

                                        @auth
                                        @guest
                                        <li>
                                            <a class="nav-item" href="{{ route('login') }}">Login</a>
                                        </li>
                                        <li>
                                            <a class="nav-item" href="{{ route('register') }}">Register</a>
                                        </li>
                                        @else
                                        <li class="account">
                                            <a id="navbarDropdown">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="account_selection">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    @endguest
                                    @else
                                    <li>
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>


                                    @endauth

                                    @endif

                                </ul>

                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main >
            @yield('content')
        </main>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
