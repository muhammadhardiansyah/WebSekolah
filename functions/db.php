<?php 
	
	$host = 'localhost'; //127.0.0.1
	$user = 'root';
	$pass = '';
	$db   = 'web_sekolah';

	$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi){
    die("KOneksi gagal ". mysqli_connect_error());
}
 ?>