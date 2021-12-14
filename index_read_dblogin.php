<?php
$username = $_POST['username'];
$pw = $_POST['password'];

include_once("c_dblogin.php");

$controller = new c_dblogin();
$truefalse = $controller->checkLogin($username, $pw);
$privSQL = $controller->privilege($username);
//$priv = $privSQL->fetch_assoc();
$priv = "";
while($priv = $privSQL->fetch_assoc()){
    $privUse = "$priv[privilege]";
    $NIK = "$priv[NIK]";
}


if ($truefalse == true) {
    $controller->invoke($privUse, $NIK);
}
else if ($truefalse == false){
    echo "<script> alert('Username dan Password tidak selaras atau akun tidak ditemukan!') </script>";
    header("Location: halaman_signin.php");
}