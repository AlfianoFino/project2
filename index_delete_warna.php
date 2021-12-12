<?php
$No = $_POST['No'];

include_once("c_warna.php");

$controller = new c_warna();
$controller->delete($No);
$controller->invoke();