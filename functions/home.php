<?php
	function get_home(){
		$query = "SELECT * FROM home";
		return result($query);
	}