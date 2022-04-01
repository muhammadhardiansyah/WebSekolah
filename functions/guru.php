<?php
	function get_guru(){
		$query = "SELECT * FROM guru INNER JOIN jabatan ON guru.id_jabatan = jabatan.id_jabatan";
		return result($query);
	}
	function add_guru($nama,$jabatan,$gambar){
		$query = "INSERT INTO guru (nama, id_jabatan, gambar) VALUES ('$nama', '$jabatan', '$gambar')";
		return run($query);
	}
	function del_guru($id_guru){
		$result = "DELETE FROM guru WHERE id_guru= $id_guru";
		return run($result);
	}
	function update_guru($nama,$jabatan,$gambar,$id_guru){
		$query = "UPDATE guru SET nama='$nama', id_jabatan = '$jabatan', gambar = '$gambar' WHERE id_guru = $id_guru";
		return run($query);
	}
	function show_guru($id_guru){
		$query = "SELECT * FROM guru INNER JOIN jabatan ON guru.id_jabatan = jabatan.id_jabatan AND id_guru = $id_guru";
		return result($query);
	}