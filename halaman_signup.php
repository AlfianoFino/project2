<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up | Vacci.me</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="center">
      <h1>Create your account</h1>
      <form id="form1" name="form1" method="post" action="index_create_dblogin.php">
        <div class="txt_field">
          <input type="text" name="username" id="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" id="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
            <input type="text" name="NIK" id="NIK" required>
            <span></span>
            <label>NIK</label>
        </div>
        <div class="txt_field">
            <input type="text" name="nomorhp" id="nomorhp" required>
            <span></span>
            <label>Phone Number</label>
        </div>
        <input type="submit" value="Sign Up">
      </form>
      <a class="nav-link" href="halaman_signin.php" style="padding-left: 30px;">Already have an account? Sign In</a>
    </div>

  </body>
</html>