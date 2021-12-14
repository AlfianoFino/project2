<?php
$username = $_POST['username'];
$pw = $_POST['password'];
$NIK = $_POST['NIK'];
$nomorhp = $_POST['nomorhp'];

include_once("c_dblogin.php");

$controller = new c_dblogin();
$priv = $controller->privilege($username);

while($x = $priv->fetch_assoc()){
    $test = "$x[NIK]";
}

if ($test == NULL) {
    $controller->create($username, $pw, $NIK, $nomorhp);
    $controller->invoke(0, $NIK);
}
else {
    
    header("Location: halaman_signup.php");
    echo "<p>NIK telah terdaftar!</p>";
	
}