@extends('layouts.master') @section('title', 'Data Pembeli') @section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
	@include('layouts.sidebar')
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i> Data Pembeli</div>
				<div class="card-body">

					@include('layouts.flash')

					<div class="pull-right" style="padding-bottom:20px">
						<button class="btn btn-success" data-toggle="modal" data-target="#modalAddPembeli">
							<i class="fa fa-plus"></i> Tambah Pembeli
						</button>
					</div>

					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Nama</th>
									<th>No Telepon</th>
									<th>Kota</th>
									<th>Bank</th>
									<th>Status Langganan</th>
									<th>Status Jual</th>
									<th>Status Terdaftar</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Nama</th>
									<th>No Telepon</th>
									<th>Kota</th>
									<th>Bank</th>
									<th>Status Langganan</th>
									<th>Status Jual</th>
									<th>Status Terdaftar</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($customers as $data)
								<tr id="{{$data->id}}">
									<td>{{$data->nama}}</td>
									<td>{{$data->notelepon}}</td>
									<td>{{$data->kota}}</td>
									<td>{{$data->bank}}</td>
									<td>{{$data->statuslangganan == 1 ? 'Langganan' : 'Tidak Langganan'}}</td>
									<td>{{$data->statusjual == 1 ? 'Lunas' : 'Hutang'}}</td>
									<td>{{$data->statusterdaftar == 1 ? 'Aktif' : 'Tidak Aktif'}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>

		<div class="modal fade" id="modalAddPembeli">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Tambah Data Pembeli</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="" method="post" id="formAddPembeli">
							{{csrf_field()}}
							<p>
								<label class="col-lg-6">Nama: </label>
								<input type="text" class="col-lg-4" name="nama" placeholder="Masukkan Nama Pembeli" required>
							</p>
							<p>
								<label class="col-lg-6">No Telepon: </label>
								<input type="tel" pattern="^[+]?[0-9]{9,15}$" class="col-lg-4" name="notelepon" placeholder="Masukkan No Telepon" required>
							</p>
							<p>
								<label class="col-lg-6">Kota: </label>
								<input type="text" class="col-lg-4" name="kota" placeholder="Masukkan Kota Pembeli" required>
							</p>
							<p>
								<label class="col-lg-6">Bank: </label>
								<input type="text" class="col-lg-4" name="bank" placeholder="Masukkan Bank" required>
							</p>

							<p style="text-align:center">
								<button type="submit" class="btn btn-success" style="text-align:center" id="btnAdd" class="btn btn-primary">
									<i class="fa fa-check"></i> Tambah</button>
							</p>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalEditPembeli">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Ubah Data Pembeli</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{url('master/pembeli/update')}}" method="post" id="formEditPembeli">
							{{csrf_field()}}
							<p>
								<input type="hidden" id="id" name="id" value="">
								<label class="col-lg-6">Nama: </label>
								<input type="text" class="col-lg-4" id="nama" name="nama" placeholder="Masukkan Nama Pembeli" required>
							</p>
							<p>
								<label class="col-lg-6">No Telepon: </label>
								<input type="tel" pattern="^[+]?[0-9]{9,15}$" class="col-lg-4" id="notelepon" name="notelepon" placeholder="Masukkan No Telepon"
								 required>
							</p>
							<p>
								<label class="col-lg-6">Kota: </label>
								<input type="text" class="col-lg-4" id="kota" name="kota" placeholder="Masukkan Kota Pembeli" required>
							</p>
							<p>
								<label class="col-lg-6">Bank: </label>
								<input type="text" class="col-lg-4" id="bank" name="bank" placeholder="Masukkan Bank" required>
							</p>
							<p>
								<label class="col-lg-6">Status Langganan: </label>
								<select name="statuslangganan" id="statuslangganan" class="col-lg-4">
									<option value="0">Tidak Langganan</option>
									<option value="1">Langganan</option>
								</select>
							</p>
							<p>
								<label class="col-lg-6">Status Jual: </label>
								<select name="statusjual" id="statusjual" class="col-lg-4">
									<option value="0">Hutang</option>
									<option value="1">Lunas</option>
								</select>
							</p>
							<p>
								<label class="col-lg-6">Status Terdaftar: </label>
								<select name="statusterdaftar" id="statusterdaftar" class="col-lg-4">
									<option value="0">Tidak Aktif</option>
									<option value="1">Aktif</option>
								</select>
							</p>

							<p style="text-align:center">
								<button type="submit" class="btn btn-success" style="text-align:center" id="btnEdit" class="btn btn-primary">
									<i class="fa fa-check"></i> Ubah</button>
							</p>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
				$('#dataTable').on('click', 'tbody tr', function () { //open modal when click barang
					var id = $(this).closest('tr').attr('id'); //get id of clicked row

					$.post("{{url('master/pembeli/edit')}}", {
							'id': id,
							'_token': "{{csrf_token()}}"
						},
						function (data) {
							$('#id').val(data.id);
							$('#nama').val(data.nama);
							$('#kota').val(data.kota);
							$('#bank').val(data.bank);
							$('#notelepon').val(data.notelepon);
							$('#statusjual').val(data.statusjual);
							$('#statuslangganan').val(data.statuslangganan);
							$('#statusterdaftar').val(data.statusterdaftar);
							$('#modalEditPembeli').modal('show');
						});
				});
			});
		</script>
	</div>
</body>
@endsection