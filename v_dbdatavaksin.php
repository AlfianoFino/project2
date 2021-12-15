<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="scss/_bootswatch.scss" rel="stylesheet">
    <link rel="stylesheet" href="scss/_variables.scss" rel="stylesheet">
</head>

<body>
    <!-- ============================== Navigasi Bar ================================ -->
    <nav class="navbar navbar-dark navbar-expand bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="halaman_informasi.php">
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
                            "<a class='nav-link' href='halaman_inputdata.php'>Input",
                            "</a>",
                            "</li>";
                        }
                        ?>
                        <li class="nav-item" style="padding-left: 30px;">
                            <a class="nav-link active" href="index_read_dbdatavaksin.php">Data
                                <span class="visually-hidden">(current)</span>
                            </a>
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
    <!---------------------====================================================---------------------->
    <div class="main-con px-5">
        <div class="card" style="width: 200rem;">
            <ul style="padding-left: 200px;padding-top: 50px;padding-right:1050px;">
            <h4 class="rounded-pill bg-primary text-center" style="font-weight: bold;">Data Vaksin</h4>
            </ul>
            <div class="row"  style="padding-left: 300px;padding-top:30px;padding-bottom:250px">
                <div class="col-md-8">
                    <table class="table table-active table-bordered" style="border:3px solid #000">
                        <?php
                        $nama; $NIK; $jenisvaksin; $jadwalvaksin1; $jadwalvaksin2;
                        while($prin = $proker->fetch_assoc()){
                            $nama = "$prin[nama]";
                            $NIK = "$prin[NIK]";
                            $jenisvaksin = "$prin[jenisvaksin]";
                            $jadwalvaksin1 = "$prin[jadwalvaksin1]";
                            $jadwalvaksin2 = "$prin[jadwalvaksin2]";
                        }?>
                    
                    
                        <tr>
                            <th style="width: 180px">Nama Lengkap : </th>
                            <?php
                            echo "<th>$nama</th>";
                            ?>
                            <th></th>
                        </tr>
                        <tr>
                            <th style="width: 180px">NIK :</th>
                            <?php
                            echo "<th>$NIK</th>";
                            ?>
                            <th></th>
                        </tr>
                        <tr>
                            <th style="width: 180px">Jenis Vaksin :</th>
                            <?php
                            echo "<th>$jenisvaksin</th>";
                            ?>
                            <th></th>
                        </tr>
                        <tr>
                            <th style="width: 180px">Jadwal Vaksin ke-1 :</th>
                            <?php
                            echo "<th>$jadwalvaksin1</th>";
                            ?>
                            <th></th>
                        </tr>
                        <tr>
                            <th style="width: 180px">Jadwal Vaksin ke-2 :</th>
                            <?php
                            echo "<th>$jadwalvaksin2</th>";
                            ?>
                            <th></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script src="index.js"></script>
</body>

</html>