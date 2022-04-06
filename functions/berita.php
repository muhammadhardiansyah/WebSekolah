<?php
	function get_berita(){
		$query = "SELECT * FROM berita";
		return result($query);
	}
	function get_berita_paginate($from, $perPage){
		$query = "SELECT * FROM berita LIMIT $from, $perPage";
		return result($query);
	}
	function get_total_page_berita($perPage) {
		$blog_count = mysqli_num_rows(get_berita());
		return ceil($blog_count / $perPage);
	}
	function add_berita($judul,$deskripsi,$gambar,$kategori,$penulis,$created_at){
		$query = "INSERT INTO berita (judul, deskripsi, gambar, kategori, penulis, created_at) VALUES ('$judul', '$deskripsi', '$gambar', '$kategori','$penulis', '$created_at')";
		return run($query);
	}
	function del_berita($id_berita){
		$query = "DELETE FROM berita WHERE id_berita= $id_berita";
		return run($query);
	}
	function edit_Berita($judul,$deskripsi,$gambar,$kategori,$penulis,$created_at,$id_berita){
		$query = "UPDATE berita SET judul='$judul', deskripsi = '$deskripsi', gambar = '$gambar', kategori = '$kategori', penulis = '$penulis', created_at = '$created_at' WHERE id_berita = $id_berita";
		return run($query);
	}
	function show_berita($id_berita){
		$query = "SELECT * FROM berita WHERE id_berita = $id_berita";
		return result($query);
	}

	function get_kategori() {
		$query = "SELECT * FROM berita GROUP BY kategori";
		return result($query);
	}
	