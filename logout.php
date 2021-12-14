<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Vacci.me.id</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme"  rel="stylesheet">
</head>

<?php
session_start();

echo "You have been logged out.";

session_destroy();

?>

<form class="white-box" id="form1" name="form1" method="post" action="halaman_signin.php">
<br>
Kembali ke halaman login?
</br>
<input class="btn btn-info btn-rounded text-uppercase waves-effect waves-light" type="submit" name="button" id="button" value="Back to Login">
</form><br></br>