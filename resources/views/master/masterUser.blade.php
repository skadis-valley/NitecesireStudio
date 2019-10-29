@extends('layouts.master') 
@section('title', 'Data Order') 
@section('content')
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
	@include('layouts.sidebar')
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i> Data User</div>
					<div class="card-body">
						@include('layouts.flash')
						
						<div class="table-responsive">
							<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th style="min-width:120px;">Nama User</th>
										<th style="min-width:120px;">email</th>
										<th style="min-width:120px;">Alamat User</th>
										<th style="min-width:120px;">Telepon User</th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $data)
									<tr id="{{$data->id}}">
										<td align="left">{{$data->name}}</td>
										<td align="left">{{$data->email}}</td>
										<td align="left">{{$data->alamat_user}}</td>
										<td>{{$data->telepon_user}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
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
	</div>
</body>
@endsection