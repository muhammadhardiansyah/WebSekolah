<?php
	function update_home($judul ,$deskripsi, $id_home){
		$query = "UPDATE home SET judul='$judul' ,deskripsi='$deskripsi' WHERE id_home = $id_home";
		return run($query);
	}
	function get_home(){
		$query = "SELECT * FROM home";
		return result($query);
	}