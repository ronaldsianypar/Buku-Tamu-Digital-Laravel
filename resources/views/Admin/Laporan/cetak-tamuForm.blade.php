
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <h3>Print Data Tamu</h3>
            </div>
            <div class="card-body">
              <div class="input-group mb-3">
                    <label for="label">Tanggal Awal</label>
                    <input type="date" name="tgl_awal" id="tgl_awal" class="form-control">
              </div>
              <div class="input-group mb-3">
                    <label for="label">Tanggal Akhir</label>
                    <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control">
              </div>
              <div class="input-group mb-3">
                    <a href="#" onclick="this.href='/cetak-data-pertanggal/'+ document.getElementById('tgl_awal').value + '/' + document.getElementById('tgl_akhir').value" target="_blank" class="btn btn-primary col-md-12">Cetak Laporan Pertanggal <i class="fas fa-print"></i>
                    </a>
              </div>
            </div>    
        </div>
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
