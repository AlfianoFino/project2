<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header" >
	<section id="wrapper" class="new-login-register" style="background: linear-gradient(120deg, <?php printf( "#%06X\n", mt_rand( 0, 0xFFFFFF )); ?>, <?php printf( "#%06X\n", mt_rand( 0, 0xFFFFFF )); ?>);">
	<div class="col-sm-12" style="margin-top: 20px">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">SAVED COLORS</h3>
                            <p class="text-muted m-b-30">The colors that has been saved into the database. You can view them!</p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
											<th>No. </th>
											<th>ID </th>
                                            <th>Background Color</th>
                                            <th>Form Color</th>
                                            <th>Button Color</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
										$no = 1;
										while($output = $proker->fetch_assoc()){
											echo "<tr>",
												"<td>",$no,"</td>",
												"<td>$output[Id]</td>",
												"<td>$output[BackgroundColor]</td>",
												"<td>$output[FormColor]</td>",
												"<td>$output[ButtonColor]</td>",
												"</tr>";
											
											$no++;
										}?>
                                    </tbody>
                                </table>
							</div>
							<a href="homepage.php" class="btn btn-info btn-rounded text-uppercase waves-effect waves-light">Return</a>
							<a href="index_read_warna.php" class="btn btn-info btn-rounded text-uppercase waves-effect waves-light">Regenerate</a>
							</br></br>
							<form id="form1" name="form1" method="post" action="index_delete_warna.php">
								<input class="btn btn-info btn-rounded text-uppercase waves-effect waves-light" type="submit" name="button" id="button" value="Delete ID">
								<input type="text" name="No" id="No" required></br></br>
							</form>
							</br>
							<form id="form2" name="form2" method="post" action="index_view_warna.php">
								<input class="btn btn-info btn-rounded text-uppercase waves-effect waves-light" type="submit" name="button" id="button" value="View ID">
								<input type="text" name="No" id="No" required></br></br>
							</form>
						</div>
						</div>
	</section>
					
</body>

</html>