<?php
	function update_visi_misi($visi, $misi, $id_visi_misi){
		$query = "UPDATE visi_misi SET visi='$visi', misi='$misi' WHERE id_visi_misi = $id_visi_misi";
		return run($query);
	}
	function get_visi_misi(){
		$query = "SELECT * FROM visi_misi";
		return result($query);
	}