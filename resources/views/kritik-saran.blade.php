
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
            .keperluan{
                text-indent: 60px;
            }
            .kbw-signature { width: 100%; height: 180px;}
#signaturePad canvas{
width: 100% !important;
height: auto;
    </style>
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('Index/images/bg-01.jpg')}}');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    KRITIK DAN SARAN 
                </span>
                <form action="{{route('create-kritik')}}" method="post" class="login100-form validate-form p-b-33 p-t-5">
                    {{ csrf_field() }}
                    <div class="container-login100-form-btn m-t-32">
                        <span class="form-control-focus-input100" align="center">
                            
                        </span>
                        
                    </div>
                    <a href="/">Kembali</a>
                    <div class="wrap-input100 validate-input" data-validate = "Input Nama Lengkap" >
                        <input class="input100" id="nama" type="text" name="nama" placeholder="Nama Lengkap" onkeypress="return event.charCode <48 || event.charCode >57" required>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Input Kritik dan Saran">
                        <input class="input100" type="text" name="kritik_saran" id="kritik_saran" placeholder="Kritik dan Saran">
                        <span class="focus-input100" data-placeholder="&#xe81d;"></span>
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