<?php
session_start();
$_SESSION["NIK"] = $NIK;
 
if ($privilege == 0){
	$_SESSION["privilege"] = "user";
} else if ($privilege == 1){
    $_SESSION["privilege"] = "admin";
}

header("location:index_read_dbdatavaksin.php");
?>