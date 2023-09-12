<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];
// Database connection

if ($Username == 'system') {
	include 'src/login-hub.html';
}

?>