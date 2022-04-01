<?php 
	
	$host = 'localhost'; //127.0.0.1
	$user = 'root';
	$pass = '';
	$db   = 'web_sekolah';

	$link = mysqli_connect($host, $user, $pass, $db);

if (!$link){
    die("Koneksi gagal ". mysqli_connect_error());
}
 ?>