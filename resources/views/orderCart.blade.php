<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Cart</title>
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
	<h2 class="mt-4 mb-3">Order Cart List</h2>



	<!-- Intro Content -->
	<div id="page-wrapper">

		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- /.panel-heading -->
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>Number Order</th>
									<th>Order Name</th>
									<th>Detail Order</th>
									<th>Order Date</th>
									<th>Destination Address</th>
									<th>Total Price</th>
									<th>Order Status</th>
									<th>evidence of transfer</th>
								</tr>
							</thead>
							<tbody>
								@foreach($orderCart as $data)
								<tr class="gradeU">
									<td>1</td>
									<td>{{$data->kategori_produk}} {{$data->nama_produk}} {{$data->ukuran_produk}}</td>
									<td>{{$data->detail_order}}</td>
									<td>{{$data->tanggal_order}}</td>
									<td>{{$data->alamat_pengiriman_order}}</td>
									<td>{{$data->harga_order}}</td>
									<td>{{$data->status_order}}</td>
									<td><?PHP
										if($data->upload_bukti_transfer === "Belum Upload Bukti"){
											echo "Please upload transfer evidence";
										} else {
											echo 'Transfer evidence uploaded';
										}
										?>
									</td>
									<td>
										<form style="margin-top:10%; margin-bottom: 10%; margin-left:10%; margin-right:10%;" action="{{url('order/uploadEvidence')}}" method="post" id="formEditPembeli" enctype="multipart/form-data">  
											{{csrf_field()}}
											<input type="file" id="inputgambar" name="gambar" class="validate" required/> 
											<input type="hidden" name="id" value="{{$data->id_order}}">
											<button id="review_submit" type="submit" style="width: 100%;" class="red_button message_submit_btn trans_300" value="Submit">Upload Now</button> 
											</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<!-- /.table-responsive -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->

		<!-- /.row -->
	</div>

</div>

<!-- Blogs -->


<!-- Newsletter -->


<!-- Footer -->



</div>
<footer class="footer" style="background-color: #fe4c50; margin-top:11%;">
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
		
		$('#selectSizeFrame').on('change', function (e) {
			
			var name =  $('#selectSizeFrame').val();
			
			var res = name.split(",");
			
			var harga = 0;
			var el = '';
			if(res[1] === 'single'){
				alert("Halo");
			}
			if(res[1] === 'double'){
				
				$('#addBrowsePhoto').html('');
				$('#addBrowsePhoto').append(
					'<input type="file" id="inputgambar" name="gambar" class="validate"/>'+
					'<img src="" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />'+
					'<input type="file" id="inputgambar2" name="gambar2" class="validate"/>'+
					'<img src="" id="showgambar2" style="max-width:200px;max-height:200px;float:left;" />');
			}	
			if(res[1] === 'triple'){
				$('#addBrowsePhoto').html('');
				$('#addBrowsePhoto').append(
					'<input type="file" id="inputgambar" name="gambar" class="validate"/>'+
					'<img src="" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />'+
					'<input type="file" id="inputgambar2" name="gambar2" class="validate"/>'+
					'<img src="" id="showgambar2" style="max-width:200px;max-height:200px;float:left;" />'+
					'<input type="file" id="inputgambar3" name="gambar3" class="validate"/>'+
					'<img src="" id="showgambar3" style="max-width:200px;max-height:200px;float:left;" />');
			}	
			if(res[1] === 'family'){
				$('#addBrowsePhoto').html('');
				$('#addBrowsePhoto').append(
					'<input type="file" id="inputgambar" name="gambar" class="validate"/>'+
					'<img src="" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />'+
					'<input type="file" id="inputgambar2" name="gambar2" class="validate"/>'+
					'<img src="" id="showgambar2" style="max-width:200px;max-height:200px;float:left;" />'+
					'<input type="file" id="inputgambar3" name="gambar3" class="validate"/>'+
					'<img src="" id="showgambar3" style="max-width:200px;max-height:200px;float:left;" />'+
					'<input type="file" id="inputgambar4" name="gambar4" class="validate"/>'+
					'<img src="" id="showgambar4" style="max-width:200px;max-height:200px;float:left;" />'+
					'<input type="file" id="inputgambar5" name="gambar5" class="validate"/>'+
					'<img src="" id="showgambar5" style="max-width:200px;max-height:200px;float:left;" />');
			}
			localStorage.setItem('harga', res[2]);
			$('#totalHarga').html('');
			$('#totalHarga').append('<h3 id="totalHargaH3">Rp.'+localStorage.getItem('harga')+'</h3>');	

		});
		$('#tambahSafePackage').on('change', function(e){
			var bool = $('#tambahSafePackage').val();
			if(bool === 'yes'){
				var currentPrice = localStorage.getItem('harga');
				var adding = 10000;
				var total = Number(currentPrice) + Number(adding);
				localStorage.setItem('harga',total);
				$('#totalHarga').html('');
				$('#totalHarga').append('<h3 id="totalHargaH3">Rp.'+localStorage.getItem('harga')+'</h3>');
			}
			else{
				localStorage.setItem('harga',localStorage.getItem('harga')-10000);
				$('#totalHarga').html('');
				$('#totalHarga').append('<h3 id="totalHargaH3">Rp.'+localStorage.getItem('harga')+'</h3>');	
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



