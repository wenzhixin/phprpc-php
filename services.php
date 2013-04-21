<?php
require_once "phprpc/phprpc_server.php";
require_once "user.php";

$server = new PHPRPC_Server();
$server->add(new User());
$server->start();
?>