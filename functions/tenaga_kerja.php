<?php
	function get_tenaga_kerja(){
		$query = "SELECT * FROM tenaga_kerja";
		return result($query);
	}