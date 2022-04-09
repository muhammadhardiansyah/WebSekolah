<?php
	function get_kepsek(){
		$query = "SELECT * FROM kepsek";
		return result($query);
	}
	function update_kepsek($nama, $gambar, $id_kepsek){
		$query = "UPDATE kepsek SET nama='$nama' ,gambar='$gambar' WHERE id_kepsek = $id_kepsek";
		return run($query);
	}
	function show_kepsek($id_kepsek){
		$query = "SELECT * FROM kepsek WHERE id_kepsek = $id_kepsek";
		return result($query);
	}