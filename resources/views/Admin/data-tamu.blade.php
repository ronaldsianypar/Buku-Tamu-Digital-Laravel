
<!DOCTYPE html>
<html>
<head>
  @include('Template/head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template/navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Tamu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Data Tamu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <!-- target="_blank" untuk membuka tab baru -->
                    <a href="{{route('cetak-tamu')}}" target="_blank" class="btn btn-primary">Cetak Semua Data <i class="fas fa-print"></i></a>
                    <a href="{{route('export-excel')}}" target="_blank" class="btn btn-primary">Export Excel<i class="fas fa-print"></i></a>
                    <!-- <a href="{{route('export-pdf')}}" target="_blank" class="btn btn-primary">Export PDF<i class="fas fa-print"></i></a> -->
                </div>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <tr>
                      <td align="center"><strong>NO</strong></td>
                      <td align="center"><strong>Nama</strong></td>
                      <td align="center"><strong>Nomor Telepon</strong></td>
                      <td align="center"><strong>Alamat</strong></td>
                      <td align="center"><strong>Keperluan</strong></td>
                      <td align="center"><strong>Instansi</strong></td>
                      <td align="center"><strong>Jabatan</strong></td>
                      <td align="center"><strong>Jenis Tamu</strong></td>
                      <td align="center"><strong>Foto Tamu</strong></td>
                      <td align="center"><strong>Tanda Tangan</strong></td>
                      <td align="center"><strong>Waktu</strong></td>
                    </tr>
                    @foreach($data_tamu as $view)
                    <tr>
                      <td><strong>{{ $loop->iteration }}</strong></td>
                      <td><strong>{{ $view->nama }}</strong></td>
                      <td><strong><a target="_blank" href="https://wa.me/{{ $view->no_telp }}">{{ $view->no_telp }}</a></strong></td>
                      <td><strong>{{ $view->alamat }}</strong></td>
                      <td><strong>{{ $view->keperluan }}</strong></td>
                      <td><strong>{{ $view->sb_instansi }}</strong></td>
                      <td><strong>{{ $view->sb_jabatan }}</strong></td>
                      <th><strong>{{ $view->jenistamu->jenistamu }}</strong></td>
                      <td align="center"><img src="{{ url('/upload/', $view->foto) }}"></strong></td>
                      <td><img src="{{ url('/upload/', $view->signature) }}"></strong></td>
                      <td><strong>{{ date('d-m-Y | H:i:s', strtotime($view->created_at)) }}</strong></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @include('sweetalert::alert')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include('Template/footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('Template/script')



</body>
</html>
