
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
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
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
                <h3>Edit Jenis Tamu</h3>
            </div>

            <div class="card-body">
                <form action="{{url('update-jenis-tamu', $jns_tamu->id)}}" method="post">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="jenistamu" name="jenistamu" class="form-control" placeholder="Jenis Tamu" value="{{($jns_tamu->jenistamu)}}">
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Ubah Data</button>
                    </div>
                </form>
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
