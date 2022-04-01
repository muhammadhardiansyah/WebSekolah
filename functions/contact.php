<?php
	function get_contactGuru(){
		$query = "SELECT * FROM contact INNER JOIN guru ON guru.id_contact=contact.id_contact INNER JOIN jabatan ON guru.id_jabatan=jabatan.id_jabatan;";
		return $query;
	}
	function get_contacKerja(){
		$query = "SELECT * FROM contact INNER JOIN tenaga_kerja ON tenaga_kerja.id_contact=contact.id_contact INNER JOIN jabatan_tenaga ON tenaga_kerja.id_tenaga=jabatan_tenaga.id_tenaga;";
		return $query;
	}
	// function add_contactGuru($nama,$id_jabatan,$deskripsi,$gmaps){
	// 	$query = "INSERT INTO contact (, id_jabatan, gambar) VALUES ('$nama', '$jabatan', '$gambar')";
	// 	return $query;
	// }
	// function del_guru($id_guru){
	// 	$result = "DELETE FROM guru WHERE id_guru= $id_guru";
	// 	return $result;
	// }