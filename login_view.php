<!DOCTYPE html>  
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Login</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Preloader -->




<section id="wrapper" class="new-login-register" style="background:<?php echo "$BackgroundColor;" ?>">

    <div class="lg-info-panel">
              <div class="inner-panel">
                  <div class="lg-content">
                      <h2>Fitur Generate Warna Random</h2>
                      <p class="text-muted">Dengan halaman ini, anda dapat menguji coba berbagai kombinasi warna random dan menyimpannya untuk dibuka nanti.</p>
                      	<a href="login.php" class="btn btn-info btn-rounded text-uppercase waves-effect waves-light">Regenerate</a>
						<a href="homepage.php" class="btn btn-info btn-rounded text-uppercase waves-effect waves-light">Back</a></br></br>
            <a href="index_read_warna.php" class="btn btn-info btn-rounded text-uppercase waves-effect waves-light">Open Data</a></br></br>
						<form id="form1" name="form1" method="post" action="index_create_warna.php">
						<input type="text" name="BackgroundColor" id="BackgroundColor" value= <?php echo "$BackgroundColor";  ?> ></br>
						<input type="text" name="FormColor" id="FormColor" value= <?php echo "$FormColor";  ?> ></br>
						<input type="text" name="ButtonColor" id="ButtonColor" value= <?php echo "$ButtonColor";  ?> ></br>
						<input type="submit" name="button" id="button" value="Save">
						<!-- <a href="index_create.php" class="btn btn-info btn-rounded text-uppercase waves-effect waves-light">Save</a> -->
						</form>
                  </div>
              </div>
				
      </div>
	
      <div class="new-login-box">
                <div class="white-box" style="background:<?php echo "$FormColor" ?>">
                    <h3 class="box-title m-b-0">Sign In to Admin</h3>
                    <small>Enter your details below</small>
                  <form class="form-horizontal new-lg-form" id="loginform" method="post" action="test_login.php">
                    <div class="form-group  m-t-20">
                      <div class="col-xs-12">
                        <label>Email Address</label>
                        <input class="form-control" id="username" name="username" type="text" required="" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                        <label>Password</label>
                        <input class="form-control" id="password" name="password" type="password" required="" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="checkbox checkbox-info pull-left p-t-0">
                          <input id="checkbox-signup" type="checkbox">
                          <label for="checkbox-signup"> Remember me </label>
                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit" style="background:<?php echo "$ButtonColor;" ?>">Log In</u>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </a> </div>
                      </div>
                    </div>
                    <div class="form-group m-b-0">
                      <div class="col-sm-12 text-center">
                        <p>Don't have an account? <a class="text-primary m-l-5"><b>Sign Up</b></a></p>
                      </div>
                    </div>
                  </form>
                  <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                      </div>
                    </div>
                  </form>
                </div>
      </div>            
  
  
</section>
<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
