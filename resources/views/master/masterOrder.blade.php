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
					<i class="fa fa-table"></i> Data Order</div>
					<div class="card-body">
						@include('layouts.flash')
						<div class="table-responsive">
							<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th style="min-width:120px;">Nama</th>
										<th style="min-width:120px;">Nomer Telepon</th>
										<th style="min-width:120px;">Pesanan</th>
										<th style="min-width:120px;">Detail Pesanan</th>
										<th style="min-width:120px;">Tanggal Order</th>
										<th style="min-width:120px;">Alamat Pengiriman</th>
										<th style="min-width:120px;">Harga</th>
										<th style="min-width:120px;">Status Order</th>
										<th>Bukti Transfer</th>
										<th>Foto 1</th>
										<th>Foto 2</th>
										<th>Foto 3</th>
										<th>Foto 4</th>
										<th>Foto 5</th>
									</tr>
								</thead>
								<tbody>
									@foreach($order as $data)
									<tr id="{{$data->id_order}}">
										<td align="left">{{$data->name}}</td>
										<td align="left">{{$data->telepon_user}}</td>
										<td align="left">{{$data->kategori_produk}} {{$data->nama_produk}} {{$data->ukuran_produk}}</td>
										<td align="left">{{$data->detail_order}}</td>
										<td>{{$data->tanggal_order}}</td>
										<td align="left">{{$data->alamat_pengiriman_order}}</td>
										<td align="right">Rp. {{number_format( $data->harga_order, 0 , '' , '.' )}}</td>
										<td align="left">{{$data->status_order}}</td>
										<td><img src="{{asset('transfer/'.$data->upload_bukti_transfer)}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" /></td>
										<td><img src="{{asset('image/'.$data->foto_1_order)}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" /></td>
										<td><img src="{{asset('image/'.$data->foto_2_order)}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" /></td>
										<td><img src="{{asset('image/'.$data->foto_3_order)}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" /></td>
										<td><img src="{{asset('image/'.$data->foto_4_order)}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" /></td>
										<td><img src="{{asset('image/'.$data->foto_5_order)}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" /></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modalEditBarang">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Ubah Data Order</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="{{url('/master/order/update')}}" method="post">
								{{csrf_field()}}
								<p>
									<input type="hidden" id="id" name="id" value="">
									<label class="col-lg-6">Nama: </label>
									<input type="text" class="col-lg-4" id="nama" name="nama" placeholder="Masukkan Nama Barang" required>
								</p>
								<p>
									<label class="col-lg-6">Nomer Telepon: </label>
									<input type="text" name="" id="telepon" name="telepon" class="col-lg-4">

								</p>
								<p>
									<label class="col-lg-6">Tanggal Order: </label>
									<input type="text" class="col-lg-4" id="tanggal_order" name="tanggal_order">
								</p>
								<p>
									<label class="col-lg-6">Detail Order: </label>
									<input type="text" class="col-lg-4" id="detailOrder" name="detailOrder">
								</p>
								<p>
									<label class="col-lg-6">Alamat Pengiriman: </label>
									<input class="col-lg-4" type="text" id="alamat" name="alamat">
								</p>
								<p>
									<label class="col-lg-6">Harga: </label>
									<input class="col-lg-4" type="text" id="harga" name="harga">
								</p>
								<p>
									<label class="col-lg-6">Status Order: </label>
									<select class="col-lg-4" type="text" name="statusOrder" id="statusOrder">
										<option value="transfer waiting">transfer waiting</option>
										<option value="your order is crafting">your order is crafting</option>
										<option value="done and sending to you place">done and sending to your place</option>
										<option value="done and sending to you place">Cancel</option>
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
						$('#dataTable tfoot th').each(function () {
							var title = $(this).text();
							$(this).html('<input type="text" placeholder="Search ' + title + '" />');
						});
				$('#dataTable').on('click', 'tbody tr', function () { //open modal when click Product
					var id = $(this).closest('tr').attr('id'); //get id of clicked row
					//$('#modalEditBarang').modal('show');
					$.post("{{url('/master/order/edit')}}", {
						'id': id,
						'_token': "{{csrf_token()}}"

					},
					function (data) {
						$('#id').val(data[0].id_order);
						$('#nama').val(data[0].name);
						$('#telepon').val(data[0].telepon_user);
						$('#tanggal_order').val(data[0].tanggal_order);
						$('#detailOrder').val(data[0].detail_order);
						$('#alamat').val(data[0].alamat_pengiriman_order);
						$('#harga').val(data[0].harga_order);
						$('#statusOrder').val(data[0].status_order);
						$('#modalEditBarang').modal('show');
					});
				});
				tbl.columns().every(function () { //searching by column
					var that = this;
					$('input', this.footer()).on('keyup change', function () {
						if (that.search() !== this.value) {
							that
							.search(this.value)
							.draw();
						}
					});
				});
			});
		</script>
	</div>
</body>
@endsection