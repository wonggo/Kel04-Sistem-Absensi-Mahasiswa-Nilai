<!DOCTYPE html>
<html>
<head>
	<title>Sistem Absensi dan Nilai Mahasiswa </title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
		<div class="row">
			<div class="col-sm-8">
			<h2>Absensi Mahasiswa UC</h2>
			<h3>NIM : </h3>
			<input type="type" class="form-control" name="NIM" placeholder="Input NIM" >
			<h3>Mata Kuliah : </h3>
			<input type="type" class="form-control" name="matkul" placeholder="Input Mata Kuliah" >
			<h3>Hari : </h3>
			<input type="type" class="form-control" name="hari" placeholder="Input Hari" >
			<h3>Status : </h3>
			<input type="type" class="form-control" name="status" placeholder="Input Status" >
			</div>

			<div class="col-sm-6">
			<br>
			<p class="text-right"><button type="button" class="btn btn-primary">Ok</button>
			<button type="button" class="btn btn-primary">Cancel</button></p>

			</div>
			
			</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>