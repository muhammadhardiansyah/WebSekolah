<?php
	function get_slider(){
		$query = "SELECT * FROM slider";
		return result($query);
	}