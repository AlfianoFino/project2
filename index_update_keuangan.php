<?php
$Id = $_POST['Id'];
$Info = $_POST['Info'];
$Tanggal = $_POST['Tanggal'];
$Tipe = $_POST['Tipe'];
$Jumlah = $_POST['Jumlah'];

include_once("c_keuangan.php");

$controller = new c_keuangan();
$controller->update($Id, $Info, $Tanggal, $Tipe, $Jumlah);
$controller->invoke();