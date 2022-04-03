<?php
	function get_slider(){
		$query = "SELECT * FROM slider ORDER BY urutan";
		return result($query);
	}
	function update_slider($urutan, $judul ,$deskripsi, $gambar, $id_slider){
		$query = "UPDATE slider SET urutan='$urutan' ,judul='$judul' ,deskripsi='$deskripsi', gambar='$gambar' WHERE id_slider = $id_slider";
		return run($query);
	}
	function show_slider($id_slider){
		$query = "SELECT * FROM slider WHERE id_slider = $id_slider";
		return result($query);
	}