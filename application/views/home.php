<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/main.css">
	<title>Home</title>
</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="side"></i>
			<i class="fas fa-times" id="tutup"></i>
		</label>
		<img src="<?php echo base_url(); ?>aset/img/cf.png" alt="logo cf">
		<img src="<?php echo base_url(); ?>aset/img/ihi.png" alt="logo ihi" class="logo2">
		<ul>
			<li><a href="<?php echo base_url()?>" >Home</a></li>
			<li><a href="<?php echo base_url('MainController/table_view') ?>" >Dashboard</a></li>
			<li><a href="<?php echo base_url('MainController/form_data')?>" >Form</a></li>
		</ul>
	</nav>

	<h1>Selamat datang di home</h1>
</body>
</html>
