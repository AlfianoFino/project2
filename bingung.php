<?php
$username = $_POST['username'];
$password = $_POST['password'];

include_once("c_dblogin.php");

$controller = new c_dblogin();
$priv = $controller->privilege($username);

while($prin = $priv->fetch_assoc()){
    echo "$prin[NIK]";
}?>