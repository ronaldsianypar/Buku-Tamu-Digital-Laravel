<!DOCTYPE html>
<html>
<head>
<title>SMK WIKRAMA BOGOR</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
.kbw-signature { width: 100%; height: 180px;}
#signaturePad canvas{
width: 100% !important;
height: auto;
}
</style>
</head>
<body class="bg-dark">
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3 mt-5">
<div class="card">
<div class="card-header">
<h5 align="center">SELAMAT DATANG DI SMK WIKRAMA BOGOR</h5>
</div>
<div class="card-body">
@if ($message = Session::get('success'))
<div class="alert alert-success  alert-dismissible">
<button type="button" class="close" data-dismiss="alert">×</button>  
<strong>{{ $message }}</strong>
</div>
@endif
<form method="POST" action="{{ url('laravel-signature-pad') }}">
@csrf
	<div class="col-md-12">
		<label class="" for="">Name:</label>
		<input type="text" name="name" class="form-group" value="" required>
	</div>

	<div class="col-md-12">
		<label class="" for="">Nomor Telepon:</label>
		<input type="text" name="no_telp" class="form-group" value=""  required> 
	</div>

	<div class="col-md-12">
		<label class="" for="">Alamat:</label>
		<input type="text" name="alamat" class="form-group" value="" required> 
	</div>

	<div class="col-md-12">
		<label class="" for="">Pilih Keperluan:</label>
		<select class="input100"style="width: 100%;" name="keperluan" id="keperluan" required>
            <option value=""disable selected > Pilih Keperluan </option>
            <option value="Studi Banding">Studi Banding</option>
            <option value="Akademik(kurikulum/PS)">Akademik(kurikulum/PS)</option>
            <option value="Keuangan(TU)">Keuangan(TU)</option>
            <option value="Lain-lain">Lain-lain</option>
        </select>
	</div>

	<div class="col-md-12">
		<label class="" for="">Jenis Tamu:</label>
		<select class="input100"style="width: 100%;" name="jenistamu_id" id="jenistamu_id" required>
            <option disabled selected value="">Jenis Tamu</option>
		    @foreach ($jns_tamu as $view)
		    <option value="{{$view->id}}">{{$view->jenistamu}}</option>
		    @endforeach
        </select> 
	</div>


<div class="col-md-12">
<label class="" for="">Signature:</label>
<br/>
<div id="signaturePad" ></div>
<br/>
<button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
<textarea id="signature64" name="signed" style="display: none"></textarea>
</div>
<br/>
<button class="btn btn-success">Save</button>
</form>
</div>
</div>
</div>
</div>
</div>
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
</body>
</html>