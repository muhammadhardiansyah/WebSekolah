<?php

function run($query) {
	global $link;

	if(mysqli_query($link, $query)) return true;
	else return false;
} 

function escape($data) {
	global $link;
	return mysqli_real_escape_string($link,$data);
}

function result($query) {
	global $link;

	if($result = mysqli_query($link, $query) or die('gagal menampilkan data')) {
		return $result;
	}
}

if (isset($_FILES['gambar'])){

	$time 	= time();
	$nama	= $_FILES['gambar']['name'];
	$error	= $_FILES['gambar']['error'];
	$size	= $_FILES['gambar']['size'];
	$asal	= $_FILES['gambar']['tmp_name'];
	$namafile = '../upload/'. $nama;
	$format = $_FILES['gambar']['type'];
	var_dump($_FILES);
	if($error == 0){
		if($size < 10000000){
			if($format == 'image/jpeg'){
				if(file_exists($namafile)){
					$namafile = str_replace(".jpg", "", $namafile);
					$namafile = $namafile. "_". $time . ".jpg";
					$gmbr = str_replace(".jpg","",$nama);
					$gambar = $gmbr."_".$time.".jpg";
					move_uploaded_file($asal, $namafile);
				}
			}
			elseif($format == 'png'){
				if(file_exists($namafile)){
					$namafile = str_replace(".png", "", $namafile);
					$namafile = $namafile. "_". $time . ".png";
					$gmbr = str_replace(".png","",$nama);
					$gambar = $gmbr."_".$time.".png";
					move_uploaded_file($asal, $namafile);
				}
			}
			
		}
	}
}