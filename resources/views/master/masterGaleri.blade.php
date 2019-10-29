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
						<div class="pull-right" style="padding-bottom:20px">
							<button class="btn btn-success" data-toggle="modal" data-target="#modalAddGambar">
								<i class="fa fa-plus"></i> Tambah Gambar
							</button>
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th style="min-width:120px;">Nama Gambar</th>
										<th style="min-width:120px;">Path Gambar</th>
										<th style="min-width:120px;">Tipe Setting</th>
									</tr>
								</thead>
								<tbody>
									@foreach($gambars as $data)
									<tr id="{{$data->id_setting_gambar}}">
										<td align="left">{{$data->nama_gambar}}</td>
										<td><img src="{{asset($data->path_gambar)}}" id="showgambarAdd" style="max-width:200px;max-height:200px;float:left;" /></td>
										<td>{{$data->tipe_setting}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modalAddGambar">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Tambah Produk</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form style="margin-top:10%; margin-bottom: 10%; margin-left:10%; margin-right:10%;" enctype="multipart/form-data" action="{{url('/master/galeri/store')}}" method="post" id="formAddKaryawan">
								{{csrf_field()}}
								<div class="form-group row">
									<label for="filePhoto" class="col-sm-4 col-form-label text-right">Nama Galeri</label>
									<div class="col-sm-8" id="addBrowsePhoto">
										<input type="text" class="form-control" name="namaAdd1" placeholder="Masukkan Nama Produk" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label text-right">Tipe Setting</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="settingAdd1" placeholder="Masukkan Ukuran Produk" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label text-right" required>Gambar</label>
									<div class="col-sm-8">
										<input type="file" id="inputgambarAdd" class="form-control" name="gambarAdd1" class="validate" required/>
										<img src="" id="showgambarAdd1" style="max-width:200px;max-height:200px;float:left;" />
									</div>
								</div>
								<div class="row">
									<label class="col-sm-4 col-form-label text-right"></label>
									<div class="col-sm-8">
										<button id="review_submit" type="submit" style="width: 100%;"  class="form-control red_button message_submit_btn trans_300" value="Submit">Tambah Gambar</button>
									</div>
								</div>
							</form>

							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modalEditBarang">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Produk</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form style="margin-top:10%; margin-bottom: 10%; margin-left:10%; margin-right:10%;" enctype="multipart/form-data" action="{{url('/master/product/update')}}" method="post" id="formAddProduk">
							{{csrf_field()}}
							<div class="form-group row">
								<input type="hidden" id="idAdd" name="idAdd" value="">
								<label for="filePhoto" class="col-sm-4 col-form-label text-right">Nama Produk</label>
								<div class="col-sm-8" id="addBrowsePhoto">
									<input type="text" id="namaAdd" class="form-control" name="namaAdd2" placeholder="Masukkan Nama Produk" required>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Kategori Produk</label>
								<div class="col-sm-8">
									<select class="form-control" type="text" name="kategoriAdd2" id="kategoriAdd">
										<option value="Scrapframe">Scrapframe</option>
										<option value="Bouquet">Bouquet</option>
										<option value="Paper Flower">Paper Flower</option>
										<option value="Pop Up Card">Pop Up Card</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Ukuran Produk</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="ukuranAdd" name="ukuranAdd2" placeholder="Masukkan Ukuran Produk" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right" required>Gambar Produk</label>
								<div class="col-sm-8">
									<input type="file" id="inputgambarAdd2" class="form-control" name="gambarAdd2" class="validate" required/>
									<img src="" id="showgambarAdd2" style="max-width:200px;max-height:200px;float:left;" />
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Harga Produk</label>
								<div class="col-sm-8">
									<input type="text" id="hargaAdd" name="hargaAdd2" class="form-control" placeholder="Masukkan harga" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Keadaan Produk</label>
								<div class="col-sm-8">
									<select class="form-control" type="text" name="statusAdd2" id="statusAdd">
										<option value="1">Ready</option>
										<option value="0">Not Ready</option>
									</select>
								</div>
							</div>
							<div class="row">
								<label class="col-sm-4 col-form-label text-right"></label>
								<div class="col-sm-8">
									<button id="review_submit" type="submit" style="width: 100%;"  class="form-control red_button message_submit_btn trans_300" value="Submit">Ubah Produk</button>
								</div>
							</div>
						</form>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
	@include('layouts.script')
	<script>
		$(document).ready(function () {
				/*
				$('#dataTable tfoot th').each(function () {
					var title = $(this).text();
					$(this).html('<input type="text" placeholder="Search ' + title + '" />');
				});
				*/
				$('#dataTable').on('click', 'tbody tr', function () { //open modal when click Product
					var id = $(this).closest('tr').attr('id'); //get id of clicked row
					//$('#modalEditBarang').modal('show');
					$.post("{{url('/master/product/edit')}}", {
						'idAdd': id,
						'_token': "{{csrf_token()}}"
					},
					function (data) {
						$('#idAdd').val(data[0].id_produk);
						$('#namaAdd').val(data[0].nama_produk);
						$('#kategoriAdd').val(data[0].kategori_produk);
						$('#hargaAdd').val(data[0].harga_produk);
						$('#ukuranAdd').val(data[0].ukuran_produk);
						$('#showgambarAdd2').attr('src', '{{ asset("<script>data[0].gambar_produk</script>")}}');
						$('#statusAdd').val(data[0].status_produk);
						$('#modalEditBarang').modal('show');
					});
				});
				function readURL(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();

						reader.onload = function (e) {
							$('#showgambarAdd1').attr('src', e.target.result);
						}

						reader.readAsDataURL(input.files[0]);
					}
				}
				$("#inputgambarAdd1").change(function () {
					readURL(this);
				});
				/*
				tbl.columns().every(function () { //searching by column
					var that = this;
					$('input', this.footer()).on('keyup change', function () {
						if (that.search() !== this.value) {
							that
							.search(this.value)
							.draw();
						}
					});
				});*/
			});
		</script>
	</div>
</body>
@endsection