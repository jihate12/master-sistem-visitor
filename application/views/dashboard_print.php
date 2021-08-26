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
			<li><a href="<?php echo base_url() ?>">Home</a></li>
			<!-- <li><a href="<?php echo base_url('MainController/table_view') ?>">Dashboard</a></li>
			<li><a href="<?php echo base_url('MainController/form_data_kegiatan') ?>">Form</a></li> -->
		</ul>
	</nav>
	<div class="wrapper-table">
		<table class="table">
			<thead>
				<tr>
					<th>KTP</th>
					<th>Tanggal</th>
					<th>Jam Datang</th>
					<th>Jam Pulang</th>
					<th>Lokasi</th>
					<th>Bertemu</th>
					<th>Departemen</th>
					<th>Kegiatan</th>
					<th class="action-label">Action</th>
				</tr>
			</thead>
			<?php foreach ($kegiatan as $data) : ?>
				<tr>
					<td data-label="KTP"><?php echo $data->ktp ?></td>
					<td><?php echo $data->tanggal ?></td>
					<td data-label="Jam Datang"><?php echo $data->jam_datang ?></td>
					<td data-label="Jam Pulang"><?php echo $data->jam_pulang ?></td>
					<td data-label="lokasi"><?php echo $data->lokasi ?></td>
					<td data-label="Bertemu"><?php echo $data->bertemu ?></td>
					<td data-label="Departemen"><?php echo $data->departemen ?></td>
					<td data-label="Kegiatan"><?php echo $data->kegiatan ?></td>
					<td class="action-wrap">
						<a href="<?php echo base_url('MainController/print_view') ?>/<?php echo $data->id ?>" class="edit-btn">Print</a>
					</td>
				</tr>
			<?php endforeach;  ?>
		</table>
	</div>
</body>

</html>
