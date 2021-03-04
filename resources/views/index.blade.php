
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMK WIKRAMA BOGOR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('Index/images/bg-removebg.png')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Index/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Index/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Index/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Index/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('Index/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Index/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Index/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('Index/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Index/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Index/css/main.css')}}">
    <style>
            .keperluan{
                text-indent: 60px;
            }
    </style>
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('Index/images/bg-01.jpg')}}');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    SELAMAT DATANG DI 
                    <div>
                        <span>SMK WIKRAMA BOGOR</span>
                    </div>
                </span>
                <form action="{{route('create')}}" method="post" class="login100-form validate-form p-b-33 p-t-5">
                    {{ csrf_field() }}
                    <div class="container-login100-form-btn m-t-32">
                        <span class="form-control-focus-input100" align="center">
                            BUKU TAMU DIGITAL
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Input Nama Lengkap">
                        <input class="input100" id="nama" type="text" name="nama" placeholder="Nama Lengkap" required>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                        
                    <div class="wrap-input100 validate-input" data-validate = "Input Nomor Telepon">
                        <input class="input100" type="text" name="no_telp" id="no_telp" placeholder="Nomor Telepon">
                        <span class="focus-input100" data-placeholder="&#xe83a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Input Alamat">
                        <input class="input100" type="text" name="alamat" id="alamat" placeholder="Alamat">
                        <span class="focus-input100" data-placeholder="&#xe82d;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Pilih Keperluan">
                        <select class="input100"style="width: 100%;" name="keperluan" id="keperluan">
                            <option value=""disable selected > Pilih Keperluan </option>
                            <option value="Studi Banding">Studi Banding</option>
                            <option value="Akademik(kurikulum/PS)">Akademik(kurikulum/PS)</option>
                            <option value="Keuangan(TU)">Keuangan(TU)</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    <div class="wrap-input100 validate-input" data-validate = "Pilih Keperluan">
                        <select class="input100"style="width: 100%;" name="jenistamu_id" id="jenistamu_id">
                            <option disabled selected>Jenis Tamu</option>
                        @foreach ($jns_tamu as $view)
                        <option value="{{$view->id}}">{{$view->jenistamu}}</option>
                        @endforeach
                        </select>
                    </div>
                    

                    

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Selesai
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    @include('sweetalert::alert')

<!--===============================================================================================-->
    <script src="{{asset('Index/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Index/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Index/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('Index/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Index/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Index/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('Index/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Index/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Index/js/main.js')}}"></script>

</body>
</html>