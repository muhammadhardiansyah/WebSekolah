<?php
	function get_gallery(){
		$query = "SELECT * FROM gallery ORDER BY id_gallery";
		return result($query);
	}
	function update_gallery($gambar ,$kategori, $id_gallery){
		$query = "UPDATE gallery SET gambar='$gambar' ,kategori='$kategori' WHERE id_gallery = $id_gallery";
		return run($query);
	}
	function show_gallery($id_gallery){
		$query = "SELECT * FROM gallery WHERE id_gallery = $id_gallery";
		return result($query);
	}
    function add_gallery($gambar,$kategori){
		$query = "INSERT INTO gallery (gambar, kategori) VALUES ('$gambar','$kategori')";
		return run($query);
	}
	function del_gallery($id_gallery){
		$result = "DELETE FROM gallery WHERE id_gallery = $id_gallery";
		return run($result);
	}