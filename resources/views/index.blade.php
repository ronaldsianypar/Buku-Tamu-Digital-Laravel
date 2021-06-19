
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
    
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <style>
        .keperluan{
            text-indent: 60px;
        }
        .kbw-signature { 
            width: 100%; height: 180px;
        }
        #signaturePad canvas{
        width: 100% !important;
        height: auto;
        }
         #results {
          padding:20px; border:1px solid; background:#ccc; 
        }
    </style>
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('Index/images/bg-01.jpg')}}');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                   BUKU TAMU DIGITAL
                </span>
                <form action="{{route('create')}}" method="post" class="login100-form validate-form p-b-33 p-t-5">
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
                        
                    <div class="wrap-input100 validate-input" data-validate = "Input Nomor Telepon">
                        <input class="input100" type="text" name="no_telp" id="no_telp" placeholder="Nomor Telepon" onkeypress="return hanyaAngka(event)"  minlength="11" maxlength="13"  required>
                        <span class="focus-input100" data-placeholder="&#xe83a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Input Alamat">
                        <input class="input100" type="text" name="alamat" id="alamat" placeholder="Alamat"  required>
                        <span class="focus-input100" data-placeholder="&#xe82d;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Pilih Keperluan">
                        <select class="input100"style="width: 100%;" name="keperluan" id="keperluan"  required>
                            <option value=""disable selected > Pilih Keperluan </option>
                            <option value="Studi Banding">Studi Banding</option>
                            <option value="Akademik(kurikulum/PS)">Akademik(kurikulum/PS)</option>
                            <option value="Keuangan(TU)">Keuangan(TU)</option>
                        </select>
                    <div class="wrap-input100 validate-input" data-validate = "Pilih Keperluan" required>
                        <select class="input100"style="width: 100%;" name="jenistamu_id" id="jenistamu_id" required>
                            <option disabled selected>Jenis Tamu</option>
                        @foreach ($jns_tamu as $view)
                        <option value="{{$view->id}}">{{$view->jenistamu}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div required>
                        <div required>
                            <div id="foto" required></div>
                            <br/>
                           
                            <button class="btn btn-danger btn-sm" onClick="take_snapshot()">Ambil Foto</button>
                            <br>
                           
                            <input type="hidden" name="image" class="image-tag" required>
                        </div>
                        <div required>
                            <br>
                            <div id="results" required>Gambar yang Anda ambil akan muncul di sini...</div>
                        </div>
                        <div class="col-md-12 text-center" required>
                            
                        </div>
                    </div>

                    <div class="col-md-12" required>
                    <label class="" for="" required>Tandatangan</label>
                    <br/>
                    <div id="signaturePad" required></div>
                    <br/>
                    <button id="clear" class="btn btn-danger btn-sm">Hapus Tandatangan</button>
                    <textarea id="signature64" name="signed" style="display: none" required></textarea>
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
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    
    <script type="text/javascript">
    var signaturePad = $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
    e.preventDefault();
    signaturePad.signature('clear');
    $("#signature64").val('');
    });
    </script>

    <script language="javascript" type="text/javascript"> 
        var maxAmount = 12;
        function textCounter(textField, showCountField) {
            if (textField.value.length > maxAmount) {
                textField.value = textField.value.substring(0, maxAmount);
            } else { 
                showCountField.value = maxAmount - textField.value.length;
            }
        }
    </script>

    <!-- Untuk Membuat Inputan Hanya Menerima Angka -->
    <script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>

    <!-- Configure a few settings and attach camera -->
        <script language="JavaScript">
            Webcam.set({
                width: 490,
                height: 390,
                image_format: 'jpeg',
                jpeg_quality: 90
            });
          
            Webcam.attach( '#foto' );
          
            function take_snapshot() {
                Webcam.snap( function(data_uri) {
                    $(".image-tag").val(data_uri);
                    document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                } );
            }
            $('#hapus').click(function(e) {
            e.preventDefault();
            signaturePad.signature('hapus');
            $("#results").val('');
            });

        </script>   
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