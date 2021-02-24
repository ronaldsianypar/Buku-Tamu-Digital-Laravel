
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMK WIKRAMA BOGOR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('Index/images/bg.jpg')}}"/>
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
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('Index/images/bg-01.jpg')}}');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    SELAMAT DATANG DI
                </span>
                <span class="login100-form-title p-b-41">
                    SMK WIKRAMA BOGOR
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5">
                    <div class="container-login100-form-btn m-t-32">
                        <span class="form-control-focus-input100" align="center">
                            BUKU TAMU DIGITAL
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Input Nama Lengkap">
                        <input class="input100" id="nama" type="text" name="username" placeholder="Nama Lengkap">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                        
                    <div class="wrap-input100 validate-input" data-validate = "Input Nomor Telepon">
                        <input class="input100" type="text" name="nomor" id="nomor" placeholder="Nomor Telepon">
                        <span class="focus-input100" data-placeholder="&#xe83a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Input Alamat">
                        <input class="input100" type="text" name="alamat" id="alamat" placeholder="Alamat">
                        <span class="focus-input100" data-placeholder="&#xe82d;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Pilih Keperluan">
                      <!-- <span class="focus-input100" align="center" style="width: 100%;">
                            BUKU TAMU DIGITAL
                        </span> -->
                        <h5>Keperluan</h5>
                      <select class="input100"name="" id="" style="width: 100%;" name="" id="">
                        <option disabled value>Pilih Keperluan</option>
                        <option value=""></option>
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