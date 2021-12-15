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

<?php
session_start();

echo "You have been logged out.";
$new = "homepage.php";

session_destroy();

?>

<script>
function returnToHome(){ 
    var newLocation = "<?php echo $new; ?>";
    window.location = newLocation;
};

setInterval(returnToHome, 2000);
</script>
