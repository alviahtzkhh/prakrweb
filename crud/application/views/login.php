<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css"> 

	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="<?php echo base_url('home/dashboard') ?>" method="POST" class="login-email" >
			<p class="login-text">LOGIN</p>
			<div class="input-group mb-4">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group mb-4">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn btn-primary mt-3 p-3">Login</button>
			</div>
		</form>
	</div>
</body>
</html>