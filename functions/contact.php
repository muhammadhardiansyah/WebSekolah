<?php
	function update_contact($deskripsi, $nomor, $email, $gmaps, $id_contact){
		$query = "UPDATE contact SET deskripsi='$deskripsi', nomor='$nomor', email='$email', gmaps = '$gmaps' WHERE id_contact = $id_contact";
		return run($query);
	}
	function get_contact(){
		$query = "SELECT * FROM contact";
		return result($query);
	}