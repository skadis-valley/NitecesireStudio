@extends('layouts.master') @section('title', 'Tentang Kami') @section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
	@include('layouts.sidebar')
	<div class="content-wrapper">
		<div class="container-fluid">
			<!-- Breadcrumbs-->
			<div class="card-header">
				<h5>Tentang Kami</h5>
            </div>
			<div class="col-lg-12">
				<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
				text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
				It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
				with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact
				that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
				Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
				making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
				default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
				have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

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