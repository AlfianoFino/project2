<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- <link rel="stylesheet" href="css/bootstrap.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="scss/_bootswatch.scss" rel="stylesheet">
        <link rel="stylesheet" href="scss/_variables.scss" rel="stylesheet">
        <link href="img/favicon.png" rel="icon">
        <!-- Pendukung JS Preview Image -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    </head>
    <body>
    <!-- ============================== Navigasi Bar ================================ -->
      <nav class="navbar navbar-dark navbar-expand bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <table>
                <tr>
                    <td>
                        <b class="text-dark" style="font-size: xx-large">Vacci.me</b>
                    </td>
                </tr>
                </table>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Vacci.me</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <?php
                  if($_SESSION["privilege"] == "admin"){
                    echo "<li class='nav-item' style='padding-left: 30px;'>",
                    "<a class='nav-link active' href='halaman_inputdata.php'>Input",
                    "<span class='visually-hidden'>(current)</span>",
                    "</a>",
                    "</li>";
                  }
                ?>
                  <li class="nav-item">
                    <a class="nav-link" href="index_read_dbdatavaksi.php" style="padding-left: 30px;">Data</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="halaman_informasi.php" style="padding-left: 30px;">Informasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="padding-left: 30px;">Logout</a>
                  </li> 
                </ul>
              </div>
          </div>
        </div>
      </nav>
      <!-- ============================== Main Container ================================ -->
      <div class="main-con px-4">
        <!-- ================================= Content ================================== -->
        <div class="card-body">
          <!-- Berita -->
          <div class="input">
            <!-- <div class="card card-head text-white bg-secondary"><h3 style="text-align: center;">Halaman Tambah Berita</h3></div> -->
              <div class="card">
                <div class="card-body">
                  <!-- Form Input -->
                  <form action="">
                    <fieldset>
                      <legend>Input Data Vaksin</legend>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group" style = "padding-left: 40px;">
                            <label class="form-label" style = "font-weight: bold;">Nama Lengkap</label>
                            <input type="text" class="form-control mb-2" name="nama" id="nama" placeholder="Input Nama Lengkap" required>
                          </div>
                          <div class="form-group" style = "padding-left: 40px;">
                            <label class="form-label" style = "font-weight: bold;">NIK</label>
                            <input type="number" class="form-control mb-2" name="NIK" id="NIK" placeholder="Input NIK" required>
                          </div>
                          <div class="form-group" style = "padding-left: 40px;">
                            <label class="form-label" style = "font-weight: bold;">Jenis Vaksin</label>
                            <input type="text" class="form-control mb-2" name="jenisvaksin" id="jenisvaksin" placeholder="Input Jenis Vaksin" required>
                          </div>
                          <div class="form-group" style = "padding-left: 40px;">
                            <label class="form-label" style = "font-weight: bold;">Jadwal Vaksin Ke- 1</label>
                            <input type="date" class="form-control mb-2" name="jadwalvaksin1" id="jadwalvaksin1" placeholder="Input Jadwal" required>
                          </div>
                          <div class="form-group" style = "padding-left: 40px;">
                            <label class="form-label" style = "font-weight: bold;">Jadwal Vaksin Ke- 2</label>
                            <input type="date" class="form-control mb-2" name="jadwalvaksin2" id="jadwalvaksin2" placeholder="Input Jadwal" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <img id="previewImg" width="100%" height="240" style="object-fit: contain; fill:#868e96;" src="img/pngwing.png">
                            <div class="mt-5" style="text-align: center;">
                              <button class="btn btn-primary my-5 my-sm-0" type="submit" style="padding-left: 50px; padding-right: 50px; font-weight: bold; font-size: x-large;">INPUT</button>
                            </div>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="js/bootstrap.js" ></script>
      <script src="index.js"></script>
    </body>
</html>