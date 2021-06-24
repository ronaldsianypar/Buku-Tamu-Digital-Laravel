<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>

	<table class="table table-bordered">
        <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>Nomor Telepon</th>
          <th>Alamat</th>
          <th>Keperluan</th>
          <th>Instansi</th>
          <th>Jabatan</th>
          <th>Jenis Tamu</th>
          <th>Foto Tamu</th>
          <th>Tanda Tangan</th>
          <td align="center"><strong>Waktu</strong></td>
        </tr>
        @foreach($data_tamu as $view)
        <tr>
          <th>{{ $loop->iteration }}</th>
          <th>{{ $view->nama }}</th>
          <th><a target="_blank" href="https://wa.me/{{ $view->no_telp }}">{{ $view->no_telp }}</a></th>
          <th>{{ $view->alamat }}</th>
          <th>{{ $view->keperluan }}</th>
          <th>{{ $view->sb_instansi }}</th>
          <th>{{ $view->sb_jabatan }}</th>
          <th>{{ $view->jenistamu->jenistamu }}</th>
          <th><img src="{{ url('/upload/', $view->foto) }}"></th>
          <th><img src="{{ url('/upload/', $view->signature) }}"></th>
          <th>{{ date('d-m-Y | H:i:s', strtotime($view->created_at)) }}</th>
        </tr>
        @endforeach
    </table>

</body>
</html>