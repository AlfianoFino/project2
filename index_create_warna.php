<?php
$BackgroundColor = $_POST['BackgroundColor'];
$FormColor = $_POST['FormColor'];
$ButtonColor = $_POST['ButtonColor'];

include_once("c_warna.php");

$controller = new c_warna();
$controller->create($BackgroundColor, $FormColor, $ButtonColor);
$controller->invoke();
