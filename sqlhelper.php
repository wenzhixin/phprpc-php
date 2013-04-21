<?php
require_once ("config.php");

function connect() {
	$conn = mysql_connect(MYSQL_SERVERNAME, MYSQL_USERNAME, MYSQL_PASSWORD);
	mysql_set_charset("utf8");
	mysql_select_db(MYSQL_DATABASE);
}

function query($query) {
	connect();
	$result = mysql_query($query);
	date_default_timezone_set("PRC");
	//file_put_contents("logs/debug.log", date("Y-m-d H:i:s") . " query: $query \n", FILE_APPEND);
	return $result;
}
?>
