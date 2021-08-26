<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/print_page.css">
	<title>Print Data</title>
</head>

<body>
	<div class="img-container">
		<img src="<?php echo base_url(); ?>aset/img/cf.png" alt="" class="img">
	</div>

	<div class="header">
		<h1>PT. CILEGON FABRICATORS</h1>
		<h1>BUKTI PENGISIAN DATA</h1>
		<h1>KUNJUNGAN</h1>
	</div>
	<p>Permohonan kunjungan ke kawasan PT. Cilegon Fabricators</p>
	<div class="data">
		<table>
			<?php foreach ($print as $data) : ?>
				<tr>
					<td>KTP</td>
					<td> : <?php echo $data->ktp ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td> : <?php echo $data->nama ?></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td> : <?php echo $data->tlp ?></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td> : <?php echo $data->jabatan ?></td>
				</tr>
				<tr>
					<td>Asal Perusahaan</td>
					<td> : <?php echo $data->perusahaan ?></td>
				</tr>
				<tr>
					<td>Tanggal Kegiatan</td>
					<td> : <?php echo $data->tanggal ?></td>
				</tr>
				<tr>
					<td>Jam Datang</td>
					<td> : <?php echo $data->jam_datang ?> </td>
				</tr>
				<tr>
					<td>Jam Pulang</td>
					<td> : <?php echo $data->jam_pulang ?> </td>
				</tr>
				<tr>
					<td>Bertemu</td>
					<td> : <?php echo $data->bertemu ?></td>
				</tr>
				<tr>
					<td>Departemen</td>
					<td> : <?php echo $data->departemen ?></td>
				</tr>
				<tr>
					<td>Lokasi</td>
					<td> : <?php echo $data->lokasi ?></td>
				</tr>
				<tr>
					<td>Kegiatan</td>
					<td> : <?php echo $data->kegiatan ?></td>
				</tr>
				<tr>
					<td>Plat Nomor Kendaraan</td>
					<td> : <?php echo $data->plat ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</body>

</html>
