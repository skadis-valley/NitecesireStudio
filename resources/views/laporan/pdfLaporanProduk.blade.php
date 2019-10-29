<html>
<head>
	<title>Nota Beli</title>
	<style type="text/css">
		table td,
		table th {
			border: 1px solid black;
		}
		body,
		table,
		div {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>
		<img src="{{asset('img/logo.png')}}" alt=""> Nota Beli UD Harmonis Motor</h1>
	<br>
	<div>
		<br/>
		<div>
			<p>Nomor Nota:
				<strong>{{$purchase->id}}</strong>
			</p>
			<p>Total:
				<strong>{{$purchase->total}}</strong>
			</p>
			<p>Nama Pemasok:
				<strong>{{$purchase->supplier->namarekening}}</strong>
			</p>
			<p>Nama Karyawan:
				<strong>{{$purchase->employee->nama}}</strong>
			</p>
			<p>Tanggal Buat:
				<strong>{{$purchase->tanggalbuat}}</strong>
			</p>
			<p>Jatuh Tempo:
				<strong>{{$purchase->jatuhtempo}}</strong>
			</p>
		</div>
		<br>
		<div>
			<table align="center">
				<thead>
					<tr>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Kuantiti</th>
						<th>Harga Beli</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->pivot->kuantiti}}</td>
						<td>Rp. {{number_format($data->pivot->hargabeli, 0, '', '.')}}</td>
						<td>Rp. {{number_format($data->pivot->subtotal, 0, '', '.')}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
</body>
</html>