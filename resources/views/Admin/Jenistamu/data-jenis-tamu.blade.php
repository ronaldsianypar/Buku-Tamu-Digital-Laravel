
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
            <h1 class="m-0 text-dark">Jenis Tamu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Jenis Tamu</li>
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
                    <a href="{{route('create-jenis-tamu')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                    <!-- target="_blank" untuk membuka tab baru -->
                    <!-- <a href="#" target="_blank" class="btn btn-primary">Cetak Data <i class="fas fa-print"></i></a> -->
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <tr>
                      <td style="width: 8%" align="center"><strong>NO</strong></td>
                      <td align="center"><strong>Jenis Tamu</strong></td>
                      <td align="center"><strong>Aksi</strong></td>
                    </tr>
                    @foreach($jns_tamu as $view)
                    <tr>
                      <td align="center"><strong>{{ $loop->iteration  }}.</strong></td>
                      <th>{{ $view->jenistamu }}</th>
                      <td align="center">
                        <a href="{{ route('edit-jenis-tamu', $view->id) }}"><i class="fas fa-edit" style="color:yellow"></i></a> | 
                        <a href="{{ route('delete-jenis-tamu', $view->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                      </td>
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
