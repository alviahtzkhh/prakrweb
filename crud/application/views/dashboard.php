<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>Halaman Home</title>
	
</head>
<body>
	<div class="container" >
		<h1 class="display-4 text-center">Data Mahasiswa</h1>
		<a href="<?php echo base_url('/home/halaman_tambah') ?>" class="btn btn-success mb-3">+Tambah Data</a>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">NIM</th>
					<th scope="col">Nama</th>
					<th scope="col">Alamat</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$count = 0;
					foreach ($queryAllMhs as $row) {
						$count = $count + 1;
				?>
				<tr>
					<td><?php echo $count ?></td>
					<td><?php echo $row->nim ?></td>
					<td><?php echo $row->nama ?></td>
					<td><?php echo $row->alamat ?></td>
					<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->nim ?>" class="btn btn-success">Edit</a> <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>" class="btn btn-danger" >Delete</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="<?php echo base_url('/home/logout') ?>" class="btn btn-outline-danger">LOGOUT</a>
	</div>
</body>
</html>