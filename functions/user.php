<?php
	function get_user(){
		$query = "SELECT * FROM user";
		return result($query);
	}

	function cek_user_by_id($id){
		$id = escape($id);
		$query  = "SELECT * FROM id WHERE id_user='$id'";
		return result($query);
	}

	function tambah_user($username, $password) {
		$username  = escape($username);
		$password  = md5(escape($password));
		$query  = "INSERT INTO user VALUES('','$username','$password')";
		return run($query);
	}

	function cek_username($username) {
		$username = escape($username);
		$query  = "SELECT * FROM user WHERE username='$username'";
		$result = result($query);
		return mysqli_num_rows($result);
	}

	function cek_login($username, $password) {
		$username = escape($username);
		$password = md5(escape($password));
		$query  = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		return result($query);
	}
 ?>