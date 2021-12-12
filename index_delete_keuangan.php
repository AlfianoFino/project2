<?php
$No = $_POST['No'];

include_once("c_keuangan.php");

$controller = new c_keuangan();
$controller->delete($No);
$controller->invoke();