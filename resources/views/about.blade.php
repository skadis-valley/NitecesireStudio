<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Nitecesire</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Colo Shop Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
  <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
</head>

<body>

  <div class="super_container">

    <!-- Header -->

    <header class="header trans_300">
      <div class="main_nav_container">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-right">
              <div class="logo_container">
                <a href="/">Nitecesire</a>
                <span style="color:#fe4c50;">Studio</span>
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
                  <li><a href="/orderCart">Cart</a></li>
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

  <div class="fs_menu_overlay"></div>
  <div class="hamburger_menu">
    <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="hamburger_menu_content text-right">
      <ul class="menu_top_nav">
        <li><a href="#">Order</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="contact.html">contact</a></li>

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
        <li><a href="/orderCart">Cart</a></li>
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
  </div>
</div>

<!-- Slider -->
<div class="container" style="margin-top: 10%;">

  <!-- Page Heading/Breadcrumbs -->
  <h2 class="mt-4 mb-3">About Us</h2>



  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="{{asset('img/about1.jpg')}}" alt="">
    </div>
    <div class="col-lg-6">
      <h2>What Nitecesire is?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
    </div>
  </div>
  <!-- /.row -->

  <!-- Team Members -->
  <h2>It's Me</h2>

  <div class="row">
    <div class="col-lg-4 mb-4">

    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="http://placehold.it/750x450" alt="">
        <div class="card-body">
          <h4 class="card-title">CEO</h4>
          <h6 class="card-subtitle mb-2 text-muted">Margareta Theresia Zhang</h6>
          <p class="card-text">My pleasure to crafting a beautiful thing for you. A happiness of you is our pleasure.</p>
        </div>
        <div class="card-footer">
          <a href="#">Margareta@example.com</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
    </div>

  </div>

  <!-- Blogs -->


  <!-- Newsletter -->


  <!-- Footer -->

 

</div>
 <footer class="footer" style="background-color: #fe4c50; margin-top:5%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
            <ul class="footer_nav">
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
            <ul>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_nav_container">
            <div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>



