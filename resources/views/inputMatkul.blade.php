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
			<h2>Matakuliah Mahasiswa UC</h2>
			<h3>Nama : </h3>
			<input type="type" class="form-control" name="nama" placeholder="Input Nama" >
			<h3>Kode Mata Kuliah : </h3>
			<input type="type" class="form-control" name="code" placeholder="Input Kode Mata Kuliah" >
			<h3>Pengajar : </h3>
			<input type="type" class="form-control" name="teacher" placeholder="Input nama Pengajar" >
			</div>

			<div class="col-sm-6">
			<br><button type="button" class="btn btn-link">Forgot the Code ?</button>
			<p class="text-right"><button type="button" class="btn btn-primary">Ok</button>
			<button type="button" class="btn btn-primary">Cancel</button></p>

			</div>
			
			</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>