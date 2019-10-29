@extends('layouts.master') 
@section('title', 'Laporan Penjualan Produk') 
@section('content')
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
	@include('layouts.sidebar')
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i> Laporan Penjualan Produk</div>
				<div class="card-body">
	@include('layouts.flash')
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						
							<thead>
								<tr>
									<th>Periode</th>
									<th>Kategori Produk</th>
									<th>Nama Produk</th>
									<th>Ukuran Produk</th>
									<th>Total Produk Tejual</th>
									<th>Total Penjualan Produk</th>
									<th>Total Pendapatan</th>
									<th>Status Produk Saat Ini</th>
								</tr>
							</thead>
							<tbody>
								@foreach($order as $data)
								<tr>
									<td>{{$data->BULAN}} {{$data->YEAR}}</td>
									<td>{{$data->kategori_produk}}</td>
									<td>{{$data->nama_produk}}</td>
									<td>{{$data->ukuran_produk}}</td>
									<td>{{$data->total_produk_terjual}}</td>
									<td align="right">Rp. {{number_format($data->total_penjualan)}}</td>
									<td align="right">Rp. {{number_format($data->pendapatan)}}</td>
									<td>{{($data->status_produk === 1 ? 'Masih Dijual' : 'Sudah Tidak Dijual')}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
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
	@include('layouts.script')
		<script>
			$(document).ready(function () {
				var nota = 0;
				var admin = 0;
				$('#setBulan').on('change', function(e) {
						$.post("{{url('nota/beli/show')}}", {
							'id': id,
							'_token': "{{csrf_token()}}"
						},
						function (data) {
							admin = data.admin;
							$('#nota').val(data.nota);
							$('#pemasok').val(data.pemasok);
							$('#karyawan').val(data.karyawan);
							$('#tanggalbuat').val(data.tanggalbuat);
							$('#jatuhtempo').val(data.jatuhtempo);
							$('#total').val(data.total);
							switch (data.statusbeli) {
								case "pesan":
									status = 0;
									break;
								case "dikirim":
									status = 1;
									break;
								case "lunas":
									status = 2;
									if(admin == 0){
										$('#statusbeli').attr('disabled', true);
									}
									break;
							}
							$('#statusbeli').val(status);
							$.post("{{url('nota/beli/show/barang')}}", {
									'id': id,
									'_token': "{{csrf_token()}}"
								},
								function (data) {
									$('#dataNota').html('');
									$('#dataNota').html(data);
								});
						});
				});
				$('#dataTable').on('click', 'tbody tr', function (e) { //delete product
					e.preventDefault();
					var status = 0;
					var id = $(this).closest('tr').attr('id');
					nota = id;
					$('#id').val(id);
					$.post("{{url('nota/beli/show')}}", {
							'id': id,
							'_token': "{{csrf_token()}}"
						},
						function (data) {
							admin = data.admin;
							$('#nota').val(data.nota);
							$('#pemasok').val(data.pemasok);
							$('#karyawan').val(data.karyawan);
							$('#tanggalbuat').val(data.tanggalbuat);
							$('#jatuhtempo').val(data.jatuhtempo);
							$('#total').val(data.total);
							switch (data.statusbeli) {
								case "pesan":
									status = 0;
									break;
								case "dikirim":
									status = 1;
									break;
								case "lunas":
									status = 2;
									if(admin == 0){
										$('#statusbeli').attr('disabled', true);
									}
									break;
							}
							$('#statusbeli').val(status);
							$.post("{{url('nota/beli/show/barang')}}", {
									'id': id,
									'_token': "{{csrf_token()}}"
								},
								function (data) {
									$('#dataNota').html('');
									$('#dataNota').html(data);
								});
						});
					$('#modalShowNota').modal('show');
				});
				$('#tabelBarang').on('click', 'tbody tr', function (e) {
					var row = $(this).closest('tr');
					var id = row.find('td:eq(0)').text();
					var status = row.find('td:eq(5)').text();
					var kuantiti = row.find('td:eq(2)').text();
					if(status == 'Dipesan'){
						status = 0;
					}else{
						status = 1;
						if(admin == 0){
							$('#ubah_status').attr('disabled', true);
							$('#ubah_kuantiti').attr('disabled', true);
						}
					}
					$('#ubah_id').val(id);
					$('#ubah_nota').val(nota);
					$('#ubah_status').val(status);
					$('#ubah_kuantiti').val(kuantiti);
					$('#modalShowBarang').modal('show');
				});
				$('#btnCetak').on('click', function (e) {
					e.preventDefault();
					$('#print_id').val($('#id').val()); 
					$('#formPrintNota')[0].submit();
				});
				$('#formChangeStatus').on('submit',function(e){
					e.preventDefault();
					$('#ubah_status').attr('disabled', false);
					$('#ubah_kuantiti').attr('disabled', false);
					$('#formChangeStatus')[0].submit();
				});
				$('#formUpdateNota').on('submit',function(e){
					e.preventDefault();
					$('#statusbeli').attr('disabled', false);
					$('#formUpdateNota')[0].submit();
				});
			});
		</script>
	</div>
</body>
@endsection