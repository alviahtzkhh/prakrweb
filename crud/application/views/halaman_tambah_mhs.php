<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css"> 
	<title>Tambah</title>
</head>
<body>
	<div class="container">
		<h3>Tambah Data Mahasiswa</h3>
		<form action="<?php echo base_url('home/fungsiTambah') ?>"  method="post">
			<div class="form-group">
				<label for="nim">NIM :</label>
				<input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required>
			</div>
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat :</label>
				<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
			</div>
			<button type="submit" class="btn btn-primary" name="Submit">Tambah</button>
			<a href="<?php echo base_url('/home/dashboard'); ?>" class="btn btn-primary">Lihat Data</a>
		</form>
	</div>
</body>
</html>