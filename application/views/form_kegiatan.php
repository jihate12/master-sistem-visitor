<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/form_kegiatan.css">
	<title>Form kegiatan</title>
</head>

<body>
	<?php echo $this->session->flashdata('notifikasi') ?>
	<!-- <div class="alert show">
		<span class="fas fa-exclamation-circle"></span>
		<span class="msg">Data berhasil didaftarkan</span>
		<span class="cls-btn">
			<span class="fas fa-times"></span>
		</span>
	</div> -->
	<!-- <div class="alert-error hide">
		<span class="fas fa-exclamation-circle"></span>
		<span class="msg-error">KTP belum teregitrasi</span>
		<span class="cls-btn-error">
			<span class="fas fa-times"></span>
		</span>
	</div> -->
	<nav>
		<img src="<?php echo base_url(); ?>aset/img/cf.png" alt="logo cf">
		<img src="<?php echo base_url(); ?>aset/img/ihi.png" alt="logo ihi" class="logo2">
		<ul>
			<li><a href="<?php echo base_url() ?>">Home</a></li>
			<!-- <li><a href="<?php echo base_url('MainController/table_view') ?>">Dashboard</a></li> -->
			<!-- <li><a href="<?php echo base_url('MainController/form_data') ?>" >Form</a></li> -->
		</ul>
	</nav>
	<div class="wrapper-kegiatan">
		<div class="wrapper-judul-kegiatan">
			<div class="tittle-kegiatan">Keterangan kunjungan</div>
		</div>
		<form class="form-kegiatan" action="<?php echo base_url('MainController/tambahDataKegiatan'); ?>" method="POST">
			<div class="kolom-input-kegiatan">
				<label>KTP</label>
				<input type="text" class="input-kegiatan" placeholder="Masukan kembali no KTP" name="ktp" value="<?php echo set_value('ktp'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('ktp', '<small>', '</small>'); ?>
			<table>
				<tr>
					<td>
						<div class="kolom-input-waktu">
							<label>Jam datang</label>
							<input type="time" class="input" placeholder="" name="jamdatang" value="<?php echo set_value('jamdatang'); ?>">
						</div>
						<?php echo form_error('jamdatang', '<small>', '</small>'); ?>
					</td>
					<td>
						<div class="kolom-input-waktu">
							<label>Jam pulang</label>
							<input type="time" class="input" placeholder="" name="jampulang" value="<?php echo set_value('jampulang'); ?>">
						</div>
						<?php echo form_error('jampulang', '<small>', '</small>'); ?>
					</td>
				</tr>
			</table>
			<div class="kolom-input-kegiatan">
				<label>Tanggal</label>
				<input type="date" class="input-kegiatan" name="tgl" value="<?php echo set_value('tgl'); ?>">
			</div>
			<div class="kolom-input-kegiatan">
				<label>Departemen</label>
				<div class="costume-selection">
					<select name="departemen">
						<option value="">~Pilih Departemen~</option>
						<option value="Boards of Directors">Boards of Directors</option>
						<option value="General Affairs">General Affairs</option>
						<option value="HRD">HRD</option>
						<option value="HSE">HSE</option>
						<option value="Purchasing">Purchasing</option>
						<option value="Fin, Acc, Tax">Fin, Acc, Tax</option>
						<option value="Adminitration">Adminitration</option>
						<option value="Quality Assurance">Quality Assurance</option>
						<option value="PPC">PPC</option>
						<option value="Project Proc">Project Proc</option>
						<option value="Quality Control">Quality Control</option>
						<option value="Material Control">Material Control</option>
						<option value="Engineering">Engineering</option>
						<option value="Business Dev">Business Dev</option>
						<option value="PTL">PTL</option>
						<option value="Production">Production</option>
						<option value="Service">Service</option>
						<option value="TG & Maintenance">TG & Maintenance</option>
					</select>
				</div>
				<!-- <input type="text" class="input-kegiatan" placeholder="Masukan nama departemen" name="departemen" value="<?php echo set_value('departemen'); ?>"> -->
			</div>
			<div class="kolom-input-kegiatan">
				<label>Tujuan Lokasi</label>
				<div class="costume-selection">
					<select name="lokasi">
						<option value="">~Pilih Tujuan Kunjungan~</option>
						<option value="Main Office">Main Office</option>
						<option value="Site">Site (Workshop, Pelabuhan, Gudang)</option>
					</select>
				</div>
				<!-- <input type="text" class="input-kegiatan" placeholder="Masukan nama departemen" name="departemen" value="<?php echo set_value('departemen'); ?>"> -->
			</div>
			<?php echo form_error('departemen', '<small>', '</small>'); ?>
			<div class="kolom-input-kegiatan">
				<label>Keterangan kegiatan</label>
				<input type="text" class="input-kegiatan" placeholder="Masukan keterangan" name="kegiatan" value="<?php echo set_value('kegiatan'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('kegiatan', '<small>', '</small>'); ?>
			<div class="kolom-input-kegiatan">
				<label>Bertemu dengan - </label>
				<input type="text" class="input-kegiatan" placeholder="Masukan nama" name="bertemu" value="<?php echo set_value('bertemu'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('bertemu', '<small>', '</small>'); ?>
			<div class="kolom-input-kegiatan">
				<label>Plat kendaraan</label>
				<input type="text" class="input-kegiatan" placeholder="Masukan plat kendaraan" name="plat" value="<?php echo set_value('plat'); ?>" autocomplete="off">
			</div>
			<?php echo form_error('plat', '<small>', '</small>'); ?>
			<div class="kolom-input-kegiatan">
				<!-- <label>Status</label> -->
				<input type="text" class="input-kegiatan-status" placeholder=" " name="status" value="Incoming" autocomplete="off" readonly>
			</div>
			<div class="kolom-input-kegiatan">
				<input type="submit" class="btn-kegiatan" value="Register" href="/form-kegiatan" target="_blank">
			</div>
			<p>No KTP Belum Teregistrasi?</p>
			<p><a href="<?php echo base_url("MainController/form_data") ?>" target="_blank">Registrasi Data!</a></p>
		</form>
	</div>

	<script>
		$('.cls-btn').click(function() {
			$('.alert').addClass("hide");
			$('.alert').removeClass("show");
			setTimeout("show", 2000);
		})

		$('.cls-btn-error').click(function() {
			$('.alert-error').addClass("hide");
			$('.alert-error').removeClass("show");
			setTimeout("show", 2000);
		})
	</script>
</body>

</html>
