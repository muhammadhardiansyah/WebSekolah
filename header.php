<?php
require_once 'core/initLanding.php';
$logo = result('SELECT * FROM logo;');
while ($item = mysqli_fetch_array($logo)) {
	$gambarLogo = $item['gambar'];
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>SMPN 2 Patikraja</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="view/admin/css/adminlte.min.css">
	<link rel="stylesheet" type="text/css" href="view/css/all.css">
	<link rel="stylesheet" type="text/css" href="view/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="view/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="view/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="view/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="view/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="view/css/jquery.rateyo.css" />
	<link rel="stylesheet" type="text/css" href="view/css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="view/css/meanmenu.min.css">
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<style>
		.grid-sizer,
		.grid-item {
			width: 24% !important;
			box-sizing: border-box !important;
		}

		@media screen and (max-width: 1000px) {

			.grid-sizer,
			.grid-item {
				width: 33% !important;
			}
		}

		@media screen and (max-width: 770px) {

			.grid-sizer,
			.grid-item {
				width: 100% !important;
			}
		}
	</style>
</head>

<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:smpn2patikraja@gmail.com" itemprop="email"><i class="fas fa-envelope"></i> smpn2patikraja@gmail.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+(0281) 6574601" itemprop="telephone"><i class="fas fa-phone"></i> (0281) 6574601</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-viber"></i></a></li>
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="login-block">
							<button class="btn btn-primary">
								<h4><a href="admin/">Login</a></h4>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img src="view/upload/<?= $gambarLogo ?>" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="index.php">Beranda</a></li>
								<li class="menu-parent">Tentang Kami
									<ul class="sub-menu">
										<li><a href="visi-misi.php">Visi dan Misi</a></li>
										<li><a href="guru.php">Guru</a></li>
										<li><a href="tenagakerja.php">Tenaga Kerja</a></li>
									</ul>
								</li>
								<li><a href="blog.php">Berita</a></li>
								<li><a href="gallery2.php">Gallery</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>