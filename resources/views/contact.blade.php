<!DOCTYPE html>
<html lang="en">



<head>
  <title>Contact Nitecesire</title>

  <title>Order Scrapframe</title>
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
  <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('styles/order_styles.css')}}">
</head>



<body>

  <div class="super_container">

    <!-- Header -->

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
        <li><a href="/orderCart">Cart</a></li>
      </ul>
    </div>
  </div>

  <div class="container contact_container">
    <div class="row">
      <div class="col">

        <!-- Breadcrumbs -->

        <div class="breadcrumbs d-flex flex-row align-items-center">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- Map Container -->

    <div class="row">
      <div class="col">
        <div id="google_map">
          <div class="map_container">
           <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyASTEADHO-J2boDZr9VcnxT6jw5IFyGHUM&q=Universitas Surabaya, Kampus Tenggilis,Seattle+WA" allowfullscreen></iframe>
         </div>
       </div>
     </div>
   </div>

   <!-- Contact Us -->

   <div class="row">

    <div class="col-lg-6 contact_col">
      <div class="contact_contents">
        <h1>Contact Us</h1>
        <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
        <div>
          <p>(800) 686-6688</p>
          <p>info.deercreative@gmail.com</p>
        </div>
        <div>
          <p>mm</p>
        </div>
        <div>
          <p>Open hours: 8.00-18.00 Mon-Fri</p>
          <p>Sunday: Closed</p>
        </div>
      </div>

      <!-- Follow Us -->

      <div class="follow_us_contents">
        <h1>Follow Us</h1>
        <ul class="social d-flex flex-row">
          <li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          <li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>

    </div>

    <div class="col-lg-6 get_in_touch_col">
      <div class="get_in_touch_contents">
        <h1>Get In Touch With Us!</h1>
        <p>Fill out the form below to recieve a free and confidential.</p>
        <form action="post">
          <div>
            <input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
            <input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
            <input id="input_website" class="form_input input_website input_ph" type="url" name="name" placeholder="Website" required="required" data-error="Name is required.">
            <textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
          </div>
          <div>
            <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">send message</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
          <h4>Newsletter</h4>
          <p>Subscribe to our newsletter and get 20% off your first purchase</p>
        </div>
      </div>
      <div class="col-lg-6">
        <form action="post">
          <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
            <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->

<footer class="footer">
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
          <div class="cr" >©2018 All Rights Reserverd. Template by <a href="#">Colorlib</a></div>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>
