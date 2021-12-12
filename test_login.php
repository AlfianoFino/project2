<?php
$username = $_POST['username'];
$password = $_POST['password'];
if (($username == 'admin') && ($password == 'admin')) {
    header("Location: index_read_keuangan.php");
}
else {
    header("Location: login.php");
	
}