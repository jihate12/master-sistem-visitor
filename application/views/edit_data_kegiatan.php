<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/edit_data.css">
	<title>Form data pengunjung</title>
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
			<li><a href="<?php echo base_url('MainController/table_view') ?>">Home</a></li>
			<li><a href="<?php echo base_url('MainController/table_view_kegiatan') ?>">Dashboard Kunjungan</a></li>
			<li><a href="<?php echo base_url('MainController/form_data') ?>">Form</a></li>
		</ul>
	</nav>
	<div class="wrapper-judul">
		<div class="tittle">Edit Data</div>
	</div>
	<div class="wrapper">
		<form class="form" action="<?php echo base_url("MainController/editStatus") ?>" method="POST">
			<?php foreach ($edit as $data) { ?>

				<div class="kolom-input">
					<label>No ID Kunjungan</label>
					<input type="text" class="input" value="<?php echo $data->id ?>" name="id" readonly>
				</div>
				<div class="kolom-input">
					<label>No KTP</label>
					<input type="text" class="input" value="<?php echo $data->ktp ?>" name="ktp" readonly>
				</div>
				<div class="kolom-input">
					<label>Nama lengkap</label>
					<input type="text" class="input" value="<?php echo $data->nama ?>" name="nama" readonly>
				</div>
				<div class="kolom-input">
					<label>Status</label>
					<div class="costume-selection">
						<select name="status">
							<option value="">~Pilih~</option>
							<option value="Incoming">Incoming</option>
							<option value="Berkunjung">Sedang berkunjung</option>
							<option value="Pulang">Sudah pulang</option>
						</select>
					</div>
				</div>

			<?php } ?>
			<div class="kolom-input">
				<input type="submit" class="btn" value="Update">
			</div>
		</form>
	</div>
</body>

</html>
