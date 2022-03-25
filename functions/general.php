<?php

function run($query) {
	global $link;

	if(mysqli_query($link, $query)) return true;
	else return false;
} 

function escape($data) {
	global $link;
	return mysqli_real_escape_string($link,$data);
}

function result($query) {
	global $link;

	if($result = mysqli_query($link, $query) or die('gagal menampilkan data')) {
		return $result;
	}
}