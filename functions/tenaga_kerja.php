<?php
	function get_tenaga_kerja(){
		$query = "SELECT * FROM tenaga_kerja INNER JOIN jabatan_tenaga ON tenaga_kerja.id_tenaga = jabatan_tenaga.id_tenaga";
		return $query;
	}
	function add_tenaga_kerja($nama,$id_tenaga,$gambar){
		$query = "INSERT INTO tenaga_kerja (nama, id_tenaga, gambar) VALUES ('$nama', '$id_tenaga', '$gambar')";
		return $query;
	}
	function del_tenaga_kerja($id_tenaga_kerja){
		$result = "DELETE FROM tenaga_kerja WHERE id_tenaga_kerja= $id_tenaga_kerja";
		return $result;
	}