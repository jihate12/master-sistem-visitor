<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/form.css">
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
			<!-- <li><a href="<?php echo base_url() ?>" >Home</a></li>
			<li><a href="<?php echo base_url('MainController/table_view') ?>" >Dashboard</a></li>
			<li><a href="<?php echo base_url('MainController/form_data') ?>" >Form</a></li> -->
		</ul>
	</nav>
	<div class="wrapper-judul">
		<div class="tittle">Registrasi Data</div>
	</div>
	<div class="wrapper">
		<form class="form" action="tambahData" method="POST" enctype="multipart/form-data">
			<div class="kolom-input">
				<label>No KTP</label>
				<input type="text" class="input" placeholder="Masukan no KTP" name="ktp" value="<?php echo set_value('ktp'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('ktp', '<small>', '</small>'); ?>
			<div class="kolom-input">
				<label>Nama lengkap</label>
				<input type="text" class="input" placeholder="Masukan nama lengkap" name="nama" value="<?php echo set_value('nama'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('nama', '<small>', '</small>'); ?>
			<div class="kolom-input">
				<label>Jenis kelamin</label>
				<div class="costume-selection">
					<select name="jkelamin">
						<option value="">~Pilih~</option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
			</div>
			<?php echo form_error('jkelamin', '<small>', '</small>'); ?>
			<div class="kolom-input">
				<label>No telepon</label>
				<input type="text" class="input" placeholder="Masukan no telepon" name="tlp" value="<?php echo set_value('tlp'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('tlp', '<small>', '</small>'); ?>
			<div class="kolom-input">
				<label>Jabatan</label>
				<input type="text" class="input" placeholder="Masukan jabatan anda" name="jabatan" value="<?php echo set_value('jabatan'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('jabatan', '<small>', '</small>'); ?>
			<div class="kolom-input">
				<label>Nama perusahaan</label>
				<input type="text" class="input" placeholder="Masukan nama perusahaan" name="perusahaan" value="<?php echo set_value('perusahaan'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('perusahaan', '<small>', '</small>'); ?>
			<div class="kolom-input">
				<label>Alamat perusahaan</label>
				<textarea name="alamat" class="text-area" placeholder="Masukan alamat perusahaan" name="alamat"></textarea>
			</div>
			<?php echo form_error('alamat', '<small>', '</small>'); ?>
			<div class="kolom-input">
				<label>Upload scan KTP</label>
				<input type="file" class="input" name="scanktp">
			</div>
			<div class="kolom-input">
				<input type="submit" class="btn" value="Register">
			</div>
		</form>
	</div>
</body>

</html>
