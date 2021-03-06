<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	
	<style>
		table.static{
			position: relative;
			border: 1px;
		}	
	</style>
	<title>Cetak Data Tamu</title>
</head>
<body>
	<div class="form-group">
		<p align="center"><b>Laporan Data Tamu</b></p>
		<table class="static" align="center" rules="all" border="1px" style="width: 95%; ">
			<tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Keperluan</th>
                <th>Jenis Tamu</th>
                <td align="center"><strong>Waktu</strong></td>
            </tr>
            @foreach($cetakdata_tamu as $view)
            <tr>
            	<th>{{ $loop->iteration }}</th>
                <th>{{ $view->nama }}</th>
                <th>{{ $view->no_telp }}</th>
                <th>{{ $view->alamat }}</th>
                <th>{{ $view->keperluan }}</th>
                <th>{{ $view->jenistamu->jenistamu }}</th>
                <th>{{ date('d-m-Y | H:i:s', strtotime($view->created_at)) }}</th>
            </tr>
            @endforeach
		</table>
	</div>
	<!-- Untuk menampilkan print -->
	<script type="text/javascript">
		window.print()
	</script>
</body>
</html>