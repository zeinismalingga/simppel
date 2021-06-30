<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Print Laporan Keluar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css" media="print">
		@page { 
        	size: landscape;
    	}
	</style>
</head>
<body>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th rowspan="2">No</th>
				<th rowspan="2">Komoditas</th>
				<th rowspan="2">Varietas</th>
				<th rowspan="2">Kelas Benih</th>
				<th colspan="6" style="text-align: center;">Keluar</th>
				<th rowspan="2">Sisa Stok</th>
			</tr>
			<tr>
				<th>Jumlah (Kg)</th>
				<th>Tanggal</th>
				<th>No. Kwitansi</th>
				<th>Nama Pembeli</th>
				<th>Alamat Pembeli</th>
				<th>Jumlah (Kg)</th>
			</tr>
		</thead>
	</table>
</body>
</html>