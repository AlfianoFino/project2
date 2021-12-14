<?php
session_start();
include_once("c_dbdatavaksin.php");

$controller = new c_dbdatavaksin();
$NIK = $_SESSION["NIK"];
$controller->invoke($NIK);
?>