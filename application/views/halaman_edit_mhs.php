<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css"> 
	<title>Edit</title>
</head>
<body>
	<div class="container">
		<h3>Edit Data Mahasiswa</h3>
		<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
			<div class="form-group">
				<label for="nim">NIM :</label>
				<input type="text" class="form-control" name="nim" value="<?php echo $queryMhsDetail->nim ?>">
			</div>
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $queryMhsDetail->nama ?>">
			</div>
			<div class="form-group">
				<div class="form-group">
				<label for="alamat">Alamat :</label>
				<input type="text" class="form-control" name="alamat" value="<?php echo $queryMhsDetail->alamat ?>">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
			<a href="<?php echo base_url('/home/dashboard'); ?>" class="btn btn-primary">Lihat Data</a>
		</form>
	</div>
</body>
</html>