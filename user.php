<?php
require_once ("sqlhelper.php");

define("SESSION_USER", "session_user");

class User {
	
	function login($username, $password) {
		$username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
		$sql = "select id, username from user where username = '$username' and password = '$password'";
		$row = mysql_fetch_object(query($sql));
		if ($row) {
			$_SESSION[SESSION_USER] = json_encode($row);
			return true;
		} else {
			$_SESSION[SESSION_USER] = null;
			return false;
		}
	}
	
	function logout() {
		$_SESSION[SESSION_USER] = null;
	}
	
	function getUser() {
		return json_decode($_SESSION[SESSION_USER]);
	}
}
?>