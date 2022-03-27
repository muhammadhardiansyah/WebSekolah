<?php
	function get_visi_misi(){
		$query = "SELECT * FROM visi_misi";
		return result($query);
	}