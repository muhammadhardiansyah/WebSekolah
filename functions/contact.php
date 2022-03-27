<?php
	function get_contact(){
		$query = "SELECT * FROM contact";
		return result($query);
	}