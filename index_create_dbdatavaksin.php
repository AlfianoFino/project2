<?php

$nama = $_POST['nama'];
$NIK = $_POST['NIK'];
$jenisvaksin = $_POST['jenisvaksin'];
$jadwalvaksin1 = $_POST['jadwalvaksin1'];
$jadwalvaksin2 = $_POST['jadwalvaksin2'];

include_once("c_dbdatavaksin.php");

$controller = new c_dbdatavaksin();

$controller->create($nama, $NIK, $jenisvaksin, $jadwalvaksin1, $jadwalvaksin2);
$controller->invoke($NIK);