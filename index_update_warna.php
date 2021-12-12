<?php
$nomorProgram = $_POST['nomorProgram'];
$namaProgram = $_POST['namaProgram'];
$suratKeterangan = $_POST['suratKeterangan'];

include_once("c_warna.php");

$controller = new c_warna();
$controller->update($nomorProgram, $namaProgram, $suratKeterangan);
$controller->invoke();