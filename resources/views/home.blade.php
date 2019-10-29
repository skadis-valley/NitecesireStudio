<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nitecesire Studio</title>
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

<div class="main_slider" style="background-image:url({{ asset('img/home_front.jpg') }})">
  <div class="container fill_height">
    <div class="row align-items-center fill_height">
      <div class="col">
        <div class="main_slider_content">
          <h1>Scrapframe</h1>
          <h2>Starting at Rp. 100.000</h2>
          <div class="red_button shop_now_button"><a href="{{url('/order')}}">Order Now</a></div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Banner -->

<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="banner_item align-items-center" style="background-image:url(img/product_img_1.jpg)">
          <div class="banner_category">
            <a href="{{url('order/scrapframe')}}" >Scrapframe</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="banner_item align-items-center" style="background-image:url(img/product_img_2.jpg)">
          <div class="banner_category">
            <a href="{{url('order/bouquet')}}">Bouquet</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="banner_item align-items-center" style="background-image:url(img/product_img_4.jpg)">
          <div class="banner_category">
            <a href="{{url('order/paperflower')}}">Paper Flower</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="banner_item align-items-center" style="background-image:url(img/product_img_3.jpg)">
          <div class="banner_category">
            <a href="{{url('order/popupcard')}}">Pop Up Card</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- New Arrivals -->

<div class="new_arrivals">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title new_arrivals_title">
          <h2>Products</h2>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col text-center">
        <div class="new_arrivals_sorting">
          <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter=".Scrapframe">Scrapframe</li>
            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Carricature_Bouquet">Bouquet</li>
            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Paper_Flower">Paper Flower</li>
            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Pop_Up_Card">Pop Up Card</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

          <!-- Product 1 -->

          @foreach($produks as $data)
          <div class="product-item {{str_replace(" ", "_", $data->kategori_produk)}}">
            <div class="product discount product_filter">
              <div class="product_image">
                <img src="{{ asset($data->gambar_produk) }}" alt="">
              </div>
              <div class="product_info">
                <h6 class="product_name"><a href="single.html">{{$data->kategori_produk}} {{$data->nama_produk}}</a></h6>
                <div class="product_price">Rp. {{number_format($data->harga_produk)}}</div>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="/order">Order</a></div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Deal of the week -->


<!-- Best Sellers -->


<!-- Benefit -->

<div class="benefit">
  <div class="container">
    <div class="row benefit_row">
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>free shipping</h6>
            <p>Suffered Alteration in Some Form</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>cach on delivery</h6>
            <p>The Internet Tend To Repeat</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>45 days return</h6>
            <p>Making it Look Like Readable</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>opening all week</h6>
            <p>8AM - 09PM</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Blogs -->


<!-- Newsletter -->


<!-- Footer -->

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
