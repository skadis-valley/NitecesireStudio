@extends('layouts.master')
@section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
	@include('layouts.sidebar')
	<div class="content-wrapper">
		<div class="container-fluid">
			@include('layouts.flash')
			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="{{url('/beranda')}}">Beranda</a>
				</li>
			</ol>
			<div class="row">
				@if(Auth::user()->isAdmin==1)
				<div class="col-xl-2 col-sm-6 mb-3">
					<div class="card text-white bg-primary o-hidden w-100 h-100">
						<div class="card-body">
							<div class="card-body-icon">
								<i class="fa fa-fw fa-user-md"></i>
							</div>
							<div class="mr-5">Data Order</div>
						</div>
						<a class="card-footer text-white clearfix small z-1" href="{{url('master/order')}}">
							<span class="float-left">Lihat</span>
							<span class="float-right">
								<i class="fa fa-angle-right"></i>
							</span>
						</a>
					</div>
				</div>
				<div class="col-xl-2 col-sm-6 mb-3">
					<div class="card text-white bg-warning o-hidden w-100 h-100">
						<div class="card-body">
							<div class="card-body-icon">
								<i class="fa fa-fw fa-users"></i>
							</div>
							<div class="mr-5">Data Produk</div>
						</div>
						<a class="card-footer text-white clearfix small z-1" href="{{url('master/product')}}">
							<span class="float-left">Lihat</span>
							<span class="float-right">
								<i class="fa fa-angle-right"></i>
							</span>
						</a>
					</div>
				</div>
			
				@endif
				<div class="col-xl-2 col-sm-6 mb-3">
					<div class="card text-white bg-secondary o-hidden w-100 h-100">
						<div class="card-body">
							<div class="card-body-icon">
								<i class="fa fa-fw fa-shopping-bag"></i>
							</div>
							<div class="mr-5">Data User</div>
						</div>
						<a class="card-footer text-white clearfix small z-1" href="{{url('master/user')}}">
							<span class="float-left">Lihat</span>
							<span class="float-right">
								<i class="fa fa-angle-right"></i>
							</span>
						</a>
					</div>
				</div>
				
			</div>

			<!--Footer -->
			@include('layouts.footer')

			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fa fa-angle-up"></i>
			</a>

			<!--Script-->
			@include('layouts.script')
			<script>
				$('.col-xl-2').hover(function () {
					$(this).removeClass('col-xl-2').addClass('col-xl-4');
				}, function () {
					$(this).removeClass('col-xl-4').addClass('col-xl-2');
				});
			</script>
		</div>
</body>
@endsection