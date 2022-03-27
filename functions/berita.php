<?php
	function get_berita(){
		$query = "SELECT * FROM berita";
		return result($query);
	}