<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/main-alter.css">
	<title><?= $tittle ?></title>
</head>

<body>
	<?php echo $this->session->flashdata('notifikasi') ?>
	<div class="container">
		<div class="side-left">
			<div class="nav-bar">
				<nav class="navigasi">
					<img src="<?php echo base_url(); ?>aset/img/cf.png" alt="logo cf" class="logo1">
					<img src="<?php echo base_url(); ?>aset/img/ihi.png" alt="logo ihi" class="logo2">
					<ul class="list-satu">
						<li><a href="<?php echo base_url('LoginController') ?>">Admin</a></li>
					</ul>
				</nav>
			</div>
			<div class="konten">
				<div class="fitur">
					<div class="text">
						<h1>Selamat Datang,</h1>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ut dolorem praesentium possimus accusantium quas, dolor culpa incidunt et sapiente dignissimos voluptatibus rerum, eos, fugit similique quo voluptate fuga suscipit sint nobis. Perferendis totam sed iusto, quidem ab iure cupiditate!</p>
					</div>
					<div class="btn">
						<!-- <button type="submit" href="<?php echo base_url('MainController/form_data'); ?>"></button> -->
						<div class="link">
							<a href="<?php echo base_url('MainController/form_data_kegiatan'); ?>">Registrasi kunjungan</a>
						</div>
					</div>
					<div class="search-wrap">
						<label for="" class="search-tittle">Sudah menginput data kegiatan anda?</label>
						<p>Silahkan print bukti pengisian data kegiatan anda disini. untuk nanti di tunjukan kepada satpam saat hari kunjungan</p>
						<form action="<?php echo base_url('MainController/cariData'); ?>" method="POST">
							<label class="search-input-label">Masukan nomor KTP :</label>
							<input type="text" placeholder="Masukan nomor KTP anda disini!" name="keyword" autocomplete="off">
							<?php echo form_error('keyword', '<small>', '</small>'); ?>
							<input type="submit" class="search-btn" value="Cari Data" name="submit" target="_blank">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="side-right">
			<div class="colorize">
				<!-- <div class="nama-perusahaan">
					<h1>PT. Cilegon Fabricator</h1>
				</div> -->
			</div>

		</div>
	</div>

	<script>
		$('.cls-btn').click(function() {
			$('.alert').addClass("hide");
			$('.alert').removeClass("show");
		})
	</script>
</body>

</html>
