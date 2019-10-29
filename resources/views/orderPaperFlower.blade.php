<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Paper Flower</title>
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

    <header class="header trans_300">
      <div class="main_nav_container">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-right">
              <div class="logo_container">
                <a href="/home">Nitecesire</a>
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
  <h2 class="mt-4 mb-3">Order Paper Flower</h2>



  <!-- Intro Content -->
  <div class="row" style="box-shadow: 0px 27px 59px rgba(0, 0, 0, 0.15);">
    <div class="col-lg-10">
      <div class="get_in_touch_contents">

        <form style="margin-top:10%; margin-bottom: 10%; margin-left:10%; margin-right:10%;" action="{{url('order/paperflower/order')}}" method="post" id="formEditPembeli" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label text-right">Paper Flower Produk</label>
            <div class="col-sm-8">
              <select class="form-control" id="selectSizeFrame" name="idProduk">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach($produks as $data)
                <option value="{{$data->nama_produk}}, {{$data->harga_produk}}, {{$data->id_produk}}">{{$data->nama_produk}} | Rp. {{$data->harga_produk}}</option>
                @endforeach
              </select> 
            </div>
          </div>
          <div class="form-group row">
            <label for="filePhoto" class="col-sm-4 col-form-label text-right">Upload Character</label>
            <div class="col-sm-8" id="addBrowsePhoto">
              <input type="file" id="inputgambar" name="gambar" class="validate" required/>
              <img src="" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right">Greeting Card</label>
            <div class="col-sm-8" id="greatingCard">
              <select class="form-control" name="greatingCard" id="tambahGreatingCard">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <label>add fee Rp.2.000</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right">Hat</label>
            <div class="col-sm-8" id="hat">
              <select class="form-control" name="hat" id="tambahHat">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <label>add fee Rp.3.000</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right">Flower</label>
            <div class="col-sm-8" id="flower">
              <select class="form-control" id="tambahBunga" name="bunga">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <label>add fee Rp.1.000</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right">Additional Information</label>
            <div class="col-sm-8">
              <textarea type="password" name="infoTambahan" rows="5" class="form-control" id="inputPassword" placeholder="Additional infromation"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right">Safe Packaging</label>
            <div class="col-sm-8" id="safePackage">
              <select class="form-control" name="safePackage" id="tambahSafePackage">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <label>add fee Rp.10.000</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label text-right">District Destination</label>
            <div class="col-sm-8">
              <select class="form-control" id="kab_id" name="kab_id">
                <?PHP
                $data = json_decode($response, true);
                for ($i=0; $i < count($data['rajaongkir']['results']); $i++) { 
                  echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."'> ".$data['rajaongkir']['results'][$i]['city_name']."</option>";
                }
                ?>
                
              </select> 
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label text-right">Service Type</label>
          
           <div class="col-sm-8">
              <select class="form-control" id="tipeService" name="tipeService" required>
                
                
              </select> 
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right">Sending Address</label>
            <div class="col-sm-8">
              <textarea name="alamat" rows="5" class="form-control" id="inputPassword" placeholder="Sending address"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right">Total</label>
            <div class="col-sm-8" id="totalHarga5">

            </div>
          </div>
           <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right">Total</label>
            <div class="col-sm-8" id="totalHarga5">
              <label id="coba"></label>
            </div>
          </div>
          <div class="row">
            <label for="inputPassword" class="col-sm-4 col-form-label text-right"></label>
            <div class="col-sm-8">
              <button id="review_submit" type="submit" style="width: 100%;" class="red_button message_submit_btn trans_300" value="Submit">Order</button>
            </div>
          </div>
        </form>
      </div>
    </div>
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
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function () {
    localStorage.setItem('harga', 0);
    localStorage.setItem('hargaTerakhir', 0);

   $('#kab_id').on('change', function (e) {


      var name =  $('#kab_id').val();

      $.post("{{url('/order/getPrice/edit')}}", {
        'kab_id': name,
        '_token': "{{csrf_token()}}"
      },
      function (data) {
        var obj = JSON.parse(data);
        //var harga = data[0].rajaongkir;
        $('#tipeService').html('');
        //alert(Object.keys(obj.rajaongkir.results[0].costs).length);
        for(var i =0; i< Object.keys(obj.rajaongkir.results[0].costs).length ; i++){
          $('#tipeService').append('<option value="' + obj.rajaongkir.results[0].costs[i].cost[0].value + ',' + obj.rajaongkir.results[0].costs[i].service +'">' + obj.rajaongkir.results[0].costs[i].service + ' - ' + obj.rajaongkir.results[0].costs[i].description.toLowerCase() + ' - Rp. ' + obj.rajaongkir.results[0].costs[i].cost[0].value+ '</option>');
        }
        localStorage.setItem('biayaOngkir', obj.rajaongkir.results[0].costs[0].cost[0].value);
        var hargaSekarang = localStorage.getItem('harga');
        var hargaJadi = Number(hargaSekarang) + Number( obj.rajaongkir.results[0].costs[0].cost[0].value)

        localStorage.setItem('harga',hargaJadi);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');   

        //alert(obj.rajaongkir.results[0].costs[0].cost[0].value);
    });
   /*
{"rajaongkir":{"query":{"origin":"444","destination":"1","weight":1,"courier":"tiki"},"status":{"code":200,"description":"OK"},"origin_details":{"city_id":"444","province_id":"11","province":"Jawa Timur","type":"Kota","city_name":"Surabaya","postal_code":"60119"},"destination_details":{"city_id":"1","province_id":"21","province":"Nanggroe Aceh Darussalam (NAD)","type":"Kabupaten","city_name":"Aceh Barat","postal_code":"23681"},"results":[{"code":"tiki","name":"Citra Van Titipan Kilat (TIKI)","costs":[{"service":"REG","description":"REGULER SERVICE","cost":[{"value":59000,"etd":"3","note":""}]}]}]}}
*/


});
    $('#tipeService').on('change', function(e) {
      var hargaOngkirLama = localStorage.getItem('biayaOngkir');
      var hargaSekarang = localStorage.getItem('harga');
      var hargaSementara = Number(hargaSekarang) - Number(hargaOngkirLama);
      var biayaOngkirBaru1 = $('#tipeService').val();
      alert(biayaOngkirBaru1);
      var biayaOngkirBaru = biayaOngkirBaru1.split(",")[0];
      localStorage.setItem('biayaOngkir', biayaOngkirBaru);

      var hargaBaru = Number(biayaOngkirBaru) + Number(hargaSementara);

      alert(hargaBaru);
      localStorage.setItem('harga',hargaBaru);
      $('#totalHarga5').html('');
      $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');   

    });
    $('#selectSizeFrame').on('change', function (e) {


      var name =  $('#selectSizeFrame').val();
      
      var res = name.split(",");
      var harga = 0;
      var el = '';
     //alert(localStorage.getItem('harga'));
     if(Number(localStorage.getItem('harga')) === 0){
      localStorage.setItem('hargaTerakhir' , res[1]);
      localStorage.setItem('harga', res[1]);
    }
    else{
      var hargaSekarang = Number(localStorage.getItem('harga'));
      var hargaPengurangan = Number(localStorage.getItem('hargaTerakhir'));
      var hargaAkhir = hargaSekarang - hargaPengurangan;
      var hargaFinal = hargaAkhir + Number(res[1]);
        //alert('Harga sekarang ' + hargaSekarang + ' - ' + hargaPengurangan + ' = ' + hargaAkhir);
        localStorage.setItem('harga', hargaFinal);
        localStorage.setItem('hargaTerakhir' , res[1]); 
      }
      alert(localStorage.getItem('harga'));
      $('#totalHarga5').html('');
      $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');
      
    });
    $('#tambahSafePackage').on('change', function(e){
      var bool = $('#tambahSafePackage').val();
      if(bool === 'Yes'){
        var currentPrice = localStorage.getItem('harga');
        var adding = 10000;
        var total = Number(currentPrice) + Number(adding);
        localStorage.setItem('harga',total);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');   
      }
      else{
        localStorage.setItem('harga',localStorage.getItem('harga')-10000);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');
      }
    });
    $('#tambahGreatingCard').on('change', function(e){
      var bool = $('#tambahGreatingCard').val();
      if(bool === 'Yes'){
        var currentPrice = localStorage.getItem('harga');
        var adding = 2000;
        var total = Number(currentPrice) + Number(adding);
        localStorage.setItem('harga',total);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');   
      }
      else{
        localStorage.setItem('harga',localStorage.getItem('harga')-2000);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');
      }
    });
    $('#tambahHat').on('change', function(e){
      var bool = $('#tambahHat').val();
      if(bool === 'Yes'){
        var currentPrice = localStorage.getItem('harga');
        var adding = 3000;
        var total = Number(currentPrice) + Number(adding);
        localStorage.setItem('harga',total);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');   
      }
      else{
        localStorage.setItem('harga',localStorage.getItem('harga')-3000);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');
      }
    });
    $('#tambahBunga').on('change', function(e){
      var bool = $('#tambahBunga').val();
      if(bool === 'Yes'){
        var currentPrice = localStorage.getItem('harga');
        var adding = 1000;
        var total = Number(currentPrice) + Number(adding);
        localStorage.setItem('harga',total);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');   
      }
      else{
        localStorage.setItem('harga',localStorage.getItem('harga')-1000);
        $('#totalHarga5').html('');
        $('#totalHarga5').append('<h3>Rp.'+localStorage.getItem('harga')+'</h3><input type="hidden" class="form-control" name="hargaTotalnya" id="totalHargaH3" value="'+localStorage.getItem('harga')+'">');
      }
    });
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#showgambar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#inputgambar").change(function () {
      readURL(this);
    });
    /*
    $('body').on('click', '#inputgambar', function(){
      readURL(this);
    });*/
  });
</script>
</body>

</html>



