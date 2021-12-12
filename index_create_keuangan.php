<?php
$Info = $_POST['Info'];
$Tanggal = $_POST['Tanggal'];
$Tipe = $_POST['Tipe'];
$Jumlah = $_POST['Jumlah'];

include_once("c_keuangan.php");

$controller = new c_keuangan();
$controller->create($Info, $Tanggal, $Tipe, $Jumlah);
$controller->invoke();
