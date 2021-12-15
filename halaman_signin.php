<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In | Vacci.me</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="center">
      <h1>Find your Vacci.me account</h1>
      <form id="form1" name="form1" method="post" action="index_read_dblogin.php">
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
        <input type="submit" value="Sign In">
      </form>
      <a class="nav-link" href="halaman_signup.php" style="padding-left: 30px;">Don't have an account? Sign Up</a>
    </div>

  </body>
</html>
