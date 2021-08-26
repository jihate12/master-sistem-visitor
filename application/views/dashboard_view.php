<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/dashboard.css">
	<title>View data</title>
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
			<!-- <li><a href="<?php echo base_url() ?>">Home</a></li> -->
			<!-- <li><a href="<?php echo base_url('MainController/table_view') ?>">Dashboard</a></li> -->
			<li><a href="<?php echo base_url('MainController/form_data_kegiatan') ?>">Form</a></li>
			<li><a href="<?php echo base_url('MainController/table_view_kegiatan') ?>">Dashboard Kunjungan</a></li>
			<li class="btn-logout"><a href="<?php echo base_url('LoginController/prosesLogout') ?>" class="a-logout">Logout</a></li>
		</ul>
	</nav>
	<div class="wrapper-table">
		<table class="table">
			<thead>
				<tr>
					<th><a href="#">KTP</a></th>
					<th>Nama</th>
					<th>Jenis kelamin</th>
					<th>No telepon</th>
					<th>Jabatan</th>
					<th>Asal perusahaan</th>
					<th>Alamat perusahaan</th>
					<th class="action-label">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($load as $data) {

				?>
					<tr>
						<td data-label="KTP"><?php echo $data->ktp ?></td>
						<td data-label="Nama"><?php echo $data->nama ?></td>
						<td data-label="Jenis kelamin"><?php echo $data->jkelamin ?></td>
						<td data-label="No telepon"><?php echo $data->tlp ?></td>
						<td data-label="Jabatan"><?php echo $data->jabatan ?></td>
						<td data-label="Nama Perusahaan"><?php echo $data->perusahaan ?></td>
						<td data-label="Alamat Perusahaan"><?php echo $data->alamat ?></td>
						<td class="action-wrap">
							<a href="<?php echo base_url('MainController/form_edit_data') ?>/<?php echo $data->ktp ?>" class="edit-btn">Edit</a>
						</td>
						<td class="action-wrap">
							<a href="<?php echo base_url('/MainController/hapusDataUser') ?>/<?php echo $data->ktp ?>" class="hapus-btn">Hapus</a>
						</td>
						<!-- <td class="action-wrap">
							<a href="<?php echo base_url('/MainController/hapusDataUser') ?>/<?php echo $data->ktp ?>" class="hapus-btn">Detail</a>
						</td> -->
					<?php
				}
					?>
			</tbody>
		</table>
	</div>
</body>

</html>
