
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
            <h1 class="m-0 text-dark">Kritik dan Saran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Kritik dan Saran</li>
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
                    <!-- <a href="#" target="_blank" class="btn btn-primary">Cetak Data <i class="fas fa-print"></i></a> -->
                </div>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Kritik dan Saran</th>
                      <td align="center"><strong>Waktu</strong></td>
                    </tr>
                    @foreach($data as $view)
                    <tr>
                      <th>{{ $loop->iteration }}</th>
                      <th>{{ $view->nama }}</th>
                      <th>{{ $view->kritik_saran }}</th>
                      <th>{{ date('d-m-Y | H:i:s', strtotime($view->created_at)) }}</th>
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
