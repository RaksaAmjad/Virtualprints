<!DOCTYPE HTML>
<html>


<head>
	<title><?=$title?></title>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<meta name="keywords" content="Template, html, premium, themeforest"/>
	<meta name="description" content="TheBox - premium e-commerce template">
	<meta name="author" content="Tsoy">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shorcut icon" href="<?=base_url()?>assets/frontend/img/sipesan/print-flat.png">
	<link
		href='<?= base_url() ?>assets/frontend/fonts/fonts.googleapis.com/cssb98c.css?family=Roboto:500,300,700,400italic,400'
		rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
	<link href='<?= base_url() ?>assets/frontend/fonts/fonts.googleapis.com/css1c0e.css?family=Open+Sans:400,700,600'
		  rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/styles.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/mystyles.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/switcher.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/animate.min.css"/>
	<link rel="alternate stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/frontend/css/schemes/bright-turquoise.css" title="bright-turquoise"
		  media="all"/>
	<link rel="alternate stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/frontend/css/schemes/turkish-rose.css" title="turkish-rose" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/salem.css"
		  title="salem" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/hippie-blue.css"
		  title="hippie-blue" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/mandy.css"
		  title="mandy" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/green-smoke.css"
		  title="green-smoke" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/horizon.css"
		  title="horizon" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/cerise.css"
		  title="cerise" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/brick-red.css"
		  title="brick-red" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/de-york.css"
		  title="de-york" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/shamrock.css"
		  title="shamrock" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/studio.css"
		  title="studio" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/leather.css"
		  title="leather" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/denim.css"
		  title="denim" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/scarlet.css"
		  title="scarlet" media="all"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/node_modules/dropify/dist/css/dropify.min.css">
</head>

<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<div class="demo_changer" id="demo_changer">
			<div class="line"></div>
		</div>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
		<h3 class="widget-title">Member Login</h3>
		<p>Welcome back, friend. Login to get started</p>
		<hr/>
		<?= form_open('login') ?>
		<div class="form-group">
			<label>Username</label>
			<input class="form-control" type="text" name="username" required autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="password" name="password" required autocomplete="off"/>
		</div>
		<input class="btn btn-primary" type="submit" value="Login" name="login"/>
		<?= form_close() ?>
		<div class="gap gap-small"></div>
		<ul class="list-inline">
			<li><a href="#nav-account-dialog" class="popup-text">Belum Punya Akun?</a>
			</li>
			<!--			<li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>-->
			<!--			</li>-->
		</ul>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
		<h3 class="widget-title">Buat Akun</h3>
		<p>Ready to get best offers? Let's get started!</p>
		<hr/>
		<?= form_open('register') ?>
		<div class="form-group">
			<label>Username</label>
			<input class="form-control" type="text" required name="username" autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input class="form-control" type="text" required name="email" autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="password" required name="password" autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input class="form-control" type="text" required name="nama" autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>Nomor HP</label>
			<input class="form-control" type="number" required name="no_hp" autocomplete="off"/>
		</div>
		<input class="btn btn-primary" type="submit" value="Buat Akun" name="register"/>
		<?= form_close() ?>
		<div class="gap gap-small"></div>
		<ul class="list-inline">
			<li><a href="#nav-login-dialog" class="popup-text">Sudah Punya Akun ?</a>
			</li>
		</ul>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
		<h3 class="widget-title">Password Recovery</h3>
		<p>Enter Your Email and We Will Send the Instructions</p>
		<hr/>
		<form>
			<div class="form-group">
				<label>Your Email</label>
				<input class="form-control" type="text"/>
			</div>
			<input class="btn btn-primary" type="submit" value="Recover Password"/>
		</form>
	</div>
	<nav class="navbar navbar-inverse navbar-main yamm">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
						data-target="#main-nav-collapse" area_expanded="false"><span
						class="sr-only">Main Menu</span><span class="icon-bar"></span><span
						class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url('') ?>">
					<p style="color: white;"><i class="fa fa-print"></i> VirtualPrints</p></a>
			</div>
			<div class="collapse navbar-collapse" id="main-nav-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Pesan Sekarang<i
								class="drop-caret" data-toggle="dropdown"></i></a>
						<ul class="dropdown-menu dropdown-menu-category">
							<li><a href="<?= base_url('spanduk') ?>"><i class="fa fa-print dropdown-menu-category-icon"></i>Print</a>
							</li>
							<li><a href="<?= base_url('kartu') ?>"><i class="fa fa-id-card dropdown-menu-category-icon"></i>Kartu Nama</a>
							</li>
							<li><a href="<?= base_url('brosur') ?>"><i class="fa fa-file-image-o dropdown-menu-category-icon"></i>Brosur</a>
							</li>
						</ul>
					</li>
				</ul>

				</form>
				<ul class="nav navbar-nav navbar-right">
					<?php if ($this->session->userdata('session_level') == null): ?>
						<li><a href="<?=base_url('admin')?>">Login Admin</a></li>
						<li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Login</a>
						</li>
						<li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Buat
								Akun</a>
						</li>
					<?php else: ?>
						<li class="dropdown">
							<a href="<?= base_url('profil') ?>"><i
									class="fa fa-user-circle"></i> <?= $this->session->userdata('session_username') ?>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url('profil') ?>"><i class="fa fa-user" style="width: 20%"></i>
										Profil Saya</a></li>
								<li><a href="<?= base_url('pesanan') ?>"><i class="fa fa-list" style="width: 20%"></i>
										Data Pesanan</a></li>
								<li><a href="<?= base_url('logout') ?>" onclick="return confirm('Logout? ')"><i class="fa fa-sign-out"
																		   style="width: 20%"></i> Logout</a></li>
							</ul>
						</li>
					<?php endif; ?>
					<li>
						<?php
						$ci =& get_instance();
						$ci->load->model('BayarModel');
						$keranjang = $ci->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();
						if ($keranjang == null):
							?>
							<a href="<?= base_url('keranjang') ?>"><i
									class="fa fa-shopping-cart"></i></a>
						<?php
						else:
							?>
							<a href="<?= base_url('keranjang') ?>"><i
									class="fa fa-shopping-cart animated infinite tada"></i></a>
						<?php
						endif;
						?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="alert-parent">
		<?php if ($this->session->flashdata('alert') == 'login_sukses') : ?>
		<div class="alert-success animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-check"></i> Berhasil Login
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'success_register') : ?>
		<div class="alert-success animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-check"></i> Berhasil Register, Silahkan Login
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'login_gagal') : ?>
		<div class="alert-danger animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-warning"></i> Username atau password salah
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'belum_login') : ?>
		<div class="alert-danger animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-warning"></i> Silahkan Login Dahulu
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'logout_sukses') : ?>
		<div class="alert-success animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-check"></i> Berhasil Logout
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'bayar_sukses') : ?>
		<div class="alert-success animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-check"></i> Berhasil Melakukan Pembayaran
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'konfirmasi_sukses') : ?>
		<div class="alert-success animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-check"></i> Berhasil Melakukan Konfirmasi
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'pesan_sukses') : ?>
		<div class="alert-success animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-check"></i> Berhasil Melakukan Pemesanan
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'pesan_hapus') : ?>
		<div class="alert-success animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-check"></i> Berhasil Menghapus Pesanan
		</div>
		<?php elseif ($this->session->flashdata('alert') == 'komentar_sukses') : ?>
		<div class="alert-success animated fadeInDownBig hide-it">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<i class="fa fa-check"></i> Berhasil Menambahkan Komentar
		</div>
		<?php endif;?>
	</div>

