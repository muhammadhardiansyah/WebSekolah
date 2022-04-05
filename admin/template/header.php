<?php
if(!isset($_SESSION)){
	session_start();
}
if (!isset($_SESSION['id_user'])){
    echo "<script type='text/javascript'>location.href = '../';</script>";
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../view/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../view/admin/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <link rel="stylesheet" href="../../view/admin/plugins/summernote/summernote-bs4.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../view/admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../view/admin/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../../dashboard.php" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-header">ADMIN</li>
			<li class="nav-item">
				<a href="../dashboard/" class="nav-link <?= $sidebar == "Dashboard" ? 'active' : '' ?>">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>
						Dashboard
					</p>
				</a>
			</li> 
			<li class="nav-item">
				<a href="../home/edit.php" class="nav-link <?= $sidebar == "Home" ? 'active' : '' ?>">
					<i class="nav-icon far fa-address-card"></i>
					<p>
						Home
					</p>
				</a>
			</li> 
			<li class="nav-item">
				<a href="../slider/" class="nav-link <?= $sidebar == "slider" ? 'active' : '' ?>">
					<i class="nav-icon fas fa-images"></i>
					<p>
						Slider
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../gallery/" class="nav-link <?= $sidebar == "gallery" ? 'active' : '' ?>">
					<i class="nav-icon fas fa-images"></i>
					<p>
						Gallery
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../visi-misi/edit.php" class="nav-link <?= $sidebar == "Visi Misi" ? 'active' : '' ?>">
					<i class="nav-icon fas fa-balance-scale"></i>
					<p>
						Visi dan Misi
					</p>
				</a>
			</li> 
			<li class="nav-item has-treeview <?= strpos($sidebar, "Guru") !== false ? 'menu-open' : '' ?>">
				<a href="#" class="nav-link <?= strpos($sidebar, "Guru") !== false ? 'active' : '' ?>">
					<i class="nav-icon fas fa-users"></i>
					<p>
						Guru
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="../guru/add.php"
							class="nav-link <?= $sidebar == "Buat Guru" ? 'active' : '' ?>">
							<i class="fa fa-plus nav-icon"></i>
							<p>Tambah Guru</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="../guru/" class="nav-link <?= $sidebar == "Semua Guru" ? 'active' : '' ?>">
							<i class="fa fa-list nav-icon"></i>
							<p>Semua Guru</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview <?= strpos($sidebar, "Tenaga Kerja") !== false ? 'menu-open' : '' ?>">
				<a href="#" class="nav-link <?= strpos($sidebar, "Tenaga Kerja") !== false ? 'active' : '' ?>">
					<i class="nav-icon fas fa-users"></i>
					<p>
						Tenaga Kerja
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="../tenagaKerja/add.php"
							class="nav-link <?= $sidebar == "Buat Tenaga Kerja" ? 'active' : '' ?>">
							<i class="fa fa-plus nav-icon"></i>
							<p>Buat Tenaga Kerja</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="../tenagaKerja/" class="nav-link <?= $sidebar == "Semua Tenaga Kerja" ? 'active' : '' ?>">
							<i class="fa fa-list nav-icon"></i>
							<p>Semua Tenaga Kerja</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview <?= strpos($sidebar, "Berita") !== false ? 'menu-open' : '' ?>">
				<a href="#" class="nav-link <?= strpos($sidebar, "Berita") !== false ? 'active' : '' ?>">
					<i class="nav-icon fa fa-envelope"></i>
					<p>
						Berita
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="../berita/add.php"
							class="nav-link <?= $sidebar == "Buat Berita" ? 'active' : '' ?>">
							<i class="fa fa-plus nav-icon"></i>
							<p>Buat Berita</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="../berita/" class="nav-link <?= $sidebar == "Semua Berita" ? 'active' : '' ?>">
							<i class="fa fa-list nav-icon"></i>
							<p>Semua Berita</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="../contact/edit.php" class="nav-link <?= $sidebar == "Edit Contact" ? 'active' : '' ?>">
					<i class="nav-icon fas fa-map-marker-alt"></i>
					<p>
						Contact
					</p>
				</a>
			</li> 
			<li class="nav-item">
				<a href="../logout.php" class="nav-link">
					<i class="nav-icon fas fa-sign-out-alt"></i>
				  <p> Sign Out </p>
			  </a>
			</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>