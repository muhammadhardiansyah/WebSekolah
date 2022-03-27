<?php
	function get_guru(){
		$query = "SELECT * FROM guru";
		return result($query);
	}