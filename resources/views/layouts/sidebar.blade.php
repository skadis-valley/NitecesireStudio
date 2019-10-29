<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
	<a class="navbar-brand" href="{{url('beranda')}}">Nitecesire Studio</a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
	 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive" style="margin-top:-10px">
		<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
			<li class="nav-item {{Request::is('beranda*') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
				<a class="nav-link" href="{{url('beranda')}}">
					<i class="fa fa-fw fa-home"></i>
					<span class="nav-link-text">Beranda</span>
				</a>
			</li>
			

			<li class="nav-item {{Request::is('master*') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Components">
				<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents1" data-parent="#exampleAccordion">
					<i class="fa fa-fw fa-book"></i>
					<span class="nav-link-text">Master Data</span>
				</a>
			</li>

			<ul class="sidenav-second-level collapse text-center" id="collapseComponents1">
				<li class="{{Request::is('master/karyawan') ? 'active' : '' }}">
					<a href="{{url('master/order')}}">
						<i class="fa fa-fw fa-user-md"></i>Data Order</a>
				</li>
				<li class="{{Request::is('master/pembeli') ? 'active' : '' }}">
					<a href="{{url('master/product')}}">
						<i class="fa fa-fw fa-users"></i>Data Produk</a>
				</li>
				<li class="{{Request::is('master/barang') ? 'active' : '' }}">
					<a href="{{url('master/user')}}">
						<i class="fa fa-fw fa-shopping-bag"></i>Data User</a>
				</li>
				
			</ul>
			<li class="nav-item {{Request::is('laporan/produk') ? 'active' : '' }}">
				<a class="nav-link" href = "{{url('laporan/produk')}}">
					<i class="fa fa-fw fa-sticky-note"></i>Laporan Produk
				</a>
			</li>

			<ul class="sidenav-second-level collapse text-center" id="collapseComponents2">
				<li class="{{Request::is('laporan/produk') ? 'active' : '' }}">
					<a href="{{url('laporan/produk')}}">
						<i class="fa fa-fw fa-download"></i> Laporan Produk</a>
				</li>
			</ul>

		</ul>

		<ul class="navbar-nav sidenav-toggler">
			<li class="nav-item">
				<a class="nav-link text-center" id="sidenavToggler">
					<i class="fa fa-fw fa-angle-left"></i>
				</a>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<span class="nav-link">
					<h5 style="color: white">Selamat Datang, {{Auth::user()->name}}</h5>
				</span>
			</li>
			<li class="nav-item">
				<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="fa fa-fw fa-sign-out"></i>Logout</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>
	</div>
</nav>