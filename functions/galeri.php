<?php
	function get_galeri(){
		$query = "SELECT * FROM galeri";
		return result($query);
	}