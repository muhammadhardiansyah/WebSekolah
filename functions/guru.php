<?php
	function get_guru(){
		$query = "SELECT * FROM guru INNER JOIN jabatan ON guru.id_jabatan = jabatan.id_jabatan";
		return $query;
	}
	function add_guru($nama,$jabatan,$gambar){
		$query = "INSERT INTO guru (nama, id_jabatan, gambar) VALUES ('$nama', '$jabatan', '$gambar')";
		return $query;
	}
	function del_guru($id_guru){
		$result = "DELETE FROM guru WHERE id_guru= $id_guru";
		return $result;
	}