<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Vacci.me.id</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme"  rel="stylesheet">
</head>
<body>
Halaman Lihat data vaksin
Anda terlogin sebagai <?php error_reporting(E_ERROR | E_WARNING | E_PARSE); session_start(); echo $_SESSION["privilege"]; ?>  !!
<form class="white-box" id="form1" name="form1" method="post" action="halaman_informasi.php">
<input class="btn btn-info btn-rounded text-uppercase waves-effect waves-light" type="submit" name="button" id="button" value="Informasi">
</form><br></br>
<form class="white-box" id="form1" name="form1" method="post" action="logout.php">
<input class="btn btn-info btn-rounded text-uppercase waves-effect waves-light" type="submit" name="button" id="button" value="Logout">
</form><br></br>

<?php
if($_SESSION["privilege"] == "admin"){
    echo "<form class='white-box' id='form1' name='form1' method='post' action='halaman_inputdata.php'>",
    "<input class='btn btn-info btn-rounded text-uppercase waves-effect waves-light' type='submit' name='button' id='button' value='Input'>",
    "</form><br></br>";
}
?>
<br><br>
<?php
while($prin = $proker->fetch_assoc()){
    echo "<tr>",
	"<td>$prin[nama]</td>",
    "<td>$prin[NIK]</td>",
    "<td>$prin[jenisvaksin]</td>",
    "<td>$prin[jadwalvaksin1]</td>",
    "<td>$prin[jadwalvaksin2]</td>",
    "</tr>";
}?>



</body>
</html>