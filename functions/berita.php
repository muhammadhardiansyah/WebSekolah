<?php
	function get_berita(){
		$query = "SELECT * FROM berita";
		return ($query);
	}
	function add_berita($judul,$deskripsi,$gambar,$kategori,$penulis){
		$query = "INSERT INTO berita (judul, deskripsi, gambar, kategori, penulis) VALUES ('$judul', '$deskripsi', '$gambar', '$kategori','$penulis')";
		return $query;
	}
	function del_berita($id_berita){
		$result = "DELETE FROM berita WHERE id_berita= $id_berita";
		return $result;
	}
	function edit_Berita($judul,$deskripsi,$gambar,$kategori,$penulis,$id_berita){
		$query = "UPDATE berita SET judul='$judul', deskripsi = '$deskripsi', gambar = '$gambar', kategori = '$kategori', penulis = '$penulis' WHERE id_berita = $id_berita";
		return $query;
	}