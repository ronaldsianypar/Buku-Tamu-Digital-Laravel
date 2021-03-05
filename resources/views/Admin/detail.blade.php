
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
            <h1 class="m-0 text-dark">Data Tamu Perbulan</h1>
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
                    <!-- <a href="#" target="_blank" class="btn btn-primary">Cetak Data <i class="fas fa-print"></i></a> -->
                </div>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <tr>
                      <td style="width: 10%" align="center"><strong>Bulan Ke-</strong></td>
                      <th>Jumlah Tamu</th>
                    </tr>
                    @foreach($sumMonth as $view)
                    
                    <tr>
                      <td align="center"><strong>{{ $loop->iteration }}</strong></td>
                      <th>{{ $view}} orang</th>
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
