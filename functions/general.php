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

function gambar(){
    if (isset($_FILES['gambar'])){
        $time 	= time();
        $nama	= $_FILES['gambar']['name'];
        $error	= $_FILES['gambar']['error'];
        $size	= $_FILES['gambar']['size'];
        $asal	= $_FILES['gambar']['tmp_name'];
        $namafile = '../../view/upload/'. $nama;
        $format = $_FILES['gambar']['type'];
        if ($error == 0){
            if ($size < 20000000){
                if ($format == 'image/jpeg'){
                    $namafileTemp = str_replace(".jpg","",$namafile);
                    $namafile = $namafileTemp."_".$time.".jpg";
                    move_uploaded_file($asal, $namafile);
                    $namaTemp = str_replace(".jpg","",$nama);
                    return $gambar = $namaTemp."_".$time.".jpg";
                }elseif($format == 'image/png'){
                    $namafileTemp = str_replace(".png","",$namafile);
                    $namafile = $namafileTemp."_".$time.".png";
                    move_uploaded_file($asal, $namafile);
                    $namaTemp = str_replace(".png","",$nama);
                    return $gambar = $namaTemp."_".$time.".png";
                }
            } 
        }
    }
}