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
  <title>Vacci.me</title>
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
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
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
            <li class="nav-item">
              <a class="nav-link" href="index_read_dbdatavaksin.php" style="padding-left: 30px;">Data</a>
            </li>
            <li class="nav-item" style="padding-left: 30px;">
              <a class="nav-link active" href="halaman_informasi.php">Informasi
                <span class="visually-hidden">(current)</span>
              </a>
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
                <h2 style="font-weight: bold;">Informasi Vaksin</h2>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">1. Vaksin Sinovac</h4>
                      <p style="padding-left: 75px; text-align: justify;">Vaksin Sinovac adalah vaksin Covid-19 pertama
                        di Indonesia yang
                        mendapat izin penggunaan darurat dari BPOM. EUA diterbitkan oleh BPOM pada hari Senin, 11
                        Januari 2021. Izin penggunaan darurat terhadap Sinovac diberikan setelah BPOM mengkaji hasil uji
                        klinis tahap III vaksin yang dilakukan di Bandung. BPOM juga mengkaji hasil uji klinis vaksin
                        Sinovac yang dilakukan di Turki dan Brasil. Dari hasil analisis terhadap uji klinis fase III di
                        Bandung menunjukkan efikasi vaksin Covid-19 Sinovac sebesar 65,3 persen. Vaksin yang
                        dikembangkan oleh Sinovac Research and Development Co.,Ltd ini diberikan dua dosis. Jumlah
                        setiap dosisnya 0,5 ml, dengan interval minimal pemberian antar dosis adalah selama 28 hari.
                        Efek samping vaksin Sinovac menurut BPOM antara lain: nyeri, iritasi, pembengkakan, nyeri otot,
                        dan demam. Adapun efek samping vaksin Sinovac dengan derajat berat seperti sakit kepala,
                        gangguan di kulit atau diare yang dilaporkan hanya sekitar 0,1 sampai dengan 1 persen.
                      </p>
                    </div>
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">2. Vaksin AstraZeneca</h4>
                      <p style="padding-left: 75px; text-align: justify;">BPOM mengeluarkan EUA untuk vaksin Covid-19
                        buatan perusahaan
                        farmasi Inggris, AstraZeneca, pada 22 Februari 2021 dengan nomor EUA 2158100143A1. BPOM
                        memberikan izin penggunaan darurat untuk AstraZeneca usai melakukan evaluasi bersama Komite
                        Nasional Penilai Obat dan pihak lainnya. Vaksin Covid-19 yang dikembangkan oleh AstraZeneca dan
                        University of Oxford ini memiliki efikasi sebesar 62,1 persen. Vaksin Covid-19 AstraZeneca ini
                        diberikan secara intramuskular dengan dua kali penyuntikan. Setiap penyuntikan dosis yang
                        diberikan sebesar 0,5 persen dengan interval minimal pemberian antar dosis yaitu 12 minggu. Efek
                        samping vaksin Covid-19 Astrazeneca bersifat ringan dan sedang. Berikut efek samping vaksin
                        AstraZeneca: nyeri, kemerahan, gatal, pembengkakan, kelelahan, sakit kepala, meriang, dan mual.
                      </p>
                    </div>
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">3. Vaksin Sinopharm</h4>
                      <p style="padding-left: 75px; text-align: justify;">BPOM mengeluarkan EUA untuk vaksin Covid-19
                        Sinopharm dengan nomor
                        EUA 2159000143A2 pada 29 April 2021. Vaksin Covid-19 Sinopharm didistribusikan oleh PT Kimia
                        Farma dengan platform inactivated virus atau virus yang dimatikan. Berdasarkan hasil evaluasi,
                        pemberian vaksin sinopharm dua dosis dengan selang pemberian 21 hari menujukkan profil keamanan
                        yang dapat ditoleransi dengan baik. Hasil uji klinik fase III yang dilakukan oleh peneliti di
                        Uni Emirates Arab (UAE) dengan subjek sekitar 42 ribu menunjukan efikasi vaksin Sinopharm
                        sebesar 78 persen. Efek samping vaksin Sinopharm yang banyak dijumpai adalah efek samping lokal
                        yang ringan. Di antaranya seperti berikut: nyeri atau kemerahan di tempat suntikan, efek samping
                        sistemik berupa sakit kepala, nyeri otot, kelelahan, diare, dan batuk.
                      </p>
                    </div>
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">4. Vaksin Moderna</h4>
                      <p style="padding-left: 75px; text-align: justify;">Vaksin Covid-19 Moderna mendapat EUA dari BPOM
                        pada Jumat, 2 Juli
                        2021. Berdasarkan data uji klinis fase ketiga menunjukkan efikasi vaksin Covid-19 Moderna
                        sebesar 94,1 persen pada kelompok usia 18-65 tahun. Efikasi vaksin Moderna kemudian menurun
                        menjadi 86,4 persen untuk usia di atas 65 tahun. Hasil uji klinis juga menyatakan vaksin Moderna
                        aman untuk kelompok populasi masyarakat dengan komorbid atau penyakit penyerta. Komorbid yang
                        dimaksud yakni penyakit paru kronis, jantung, obesitas berat, diabetes, penyakit lever hati, dan
                        HIV. Beberapa efek samping yang paling sering dirasakan setelahn suntik vaksin Covid-19 Moderna
                        adalah nyeri (di tempat suntikan), kelelahan, nyeri otot, nyeri sendi, dan pusing. Sementara
                        itu, potensi gejala umum atau moderat yang muncul dapat berupa lemas, sakit kepala, menggigil,
                        demam, dan mual.
                      </p>
                    </div>
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">5. Vaksin Pfizer</h4>
                      <p style="padding-left: 75px; text-align: justify;">BPOM kembali menerbitkan EUA untuk vaksin
                        Covid-19 Pfizer pada 15
                        Juli 2021. Data uji klinik fase III menunjukkan efikasi vaksin yang dikembangkan oleh Pfizer
                        Inc. dan BioNTech ini sebesar 100 persen pada usia remaja 12-15 tahun, kemudian menurun menjadi
                        95,5 persen pada usia 16 tahun ke atas. Beberapa kajian menunjukkan keamanan vaksin Covid-19
                        Pfizer ini dapat ditoleransi pada semua kelompok usia. Vaksin Covid-19 Pfizer diberikan secara
                        intramuskular dengan dua kali penyuntikan. Setiap penyuntikan dosis yang diberikan sebesar 0,3
                        ml dengan interval minimal pemberian antar dosis yaitu 21-28 hari. Untuk efek samping
                        pasca-vaksinasi, sebagian besar cenderung bersifat ringan. Berikut beberapa efek samping vaksin
                        Pfizer yang umum dilaporkan: nyeri badan di tempat bekas suntikan, kelelahan, nyeri kepala,
                        nyeri otot, nyeri sendi, dan demam.
                      </p>
                    </div>
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">6. Vaksin Bio Farma</h4>
                      <p style="padding-left: 75px; text-align: justify;">BPOM mengeluarkan EUA untuk vaksin Covid-19
                        yang diproduksi oleh PT Bio Farma (Persero) pada 16 Februari 2021. Vaksin Covid-19 Bio farma ini
                        memiliki nomor izin penggunaan EUA 2102907543A1. Vaksin yang diproduksi oleh PT Bio Farma ini
                        berasal dari bahan baku vaksin yang secara bertahap telah dikirimkan oleh Sinovac. Vaksin ini
                        memiliki bentuk sediaan vial 5 ml. Setiap vial berisi 10 dosis vaksin yang berasal dari virus
                        yang di-inaktivasi. Untuk menjaga mutu dan kualitasnya, vaksin Covid-19 ini harus disimpan dalam
                        tempat penyimpanan dengan suhu stabil antara 2-8 derajat celsius. Pada setiap vial telah
                        dilengkapi dengan dua dimensi barcode khusus yang menunjukan detail informasi dari setiap vial.
                        Hal itu berfungsi untuk melacak vaksin dan mencegah pemalsuan vaksin.
                      </p>
                    </div>
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">7. Vaksin Sputnik V</h4>
                      <p style="padding-left: 75px; text-align: justify;">BPOM menerbitkan EUA untuk vaksin Covid-19
                        Sputnik V pada Selasa, 24 Agustus 2021. Vaksin Covid-19 Sputnik V digunakan untuk kelompok usia
                        18 tahun ke atas. Vaksin Covid-19 Sputnik V ini diberikan secara injeksi intramuscular dengan
                        dosis 0,5 mL untuk 2 kali penyuntikan dalam rentang waktu 3 minggu. Vaksin Covid-19 Sputnik V
                        dikembangkan oleh The Gamaleya National Center of Epidemiology and Microbiology di Russia ini
                        menggunakan platform Non-Replicating Viral Vector (Ad26-S dan Ad5-S). Berdasarkan hasil kajian
                        terkait dengan keamanannya, efek samping dari penggunaan vaksin Covid-19 Sputnik V merupakan
                        efek samping dengan tingkat keparahan ringan atau sedang seperti flu yang ditandai dengan demam,
                        menggigil, nyeri sendi, nyeri otot, badan lemas, ketidaknyamanan, sakit kepala, hipertermia,
                        atau reaksi lokal pada lokasi injeksi. Sementara untuk efikasinya, data uji klinik fase 3
                        menunjukkan vaksin Covid-19 Sputnik V memberikan efikasi sebesar 91,6 persen dengan rentang
                        confidence interval 85,6 persen- 95,2 persen.
                      </p>
                    </div>
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">8. Vaksin Janssen</h4>
                      <p style="padding-left: 75px; text-align: justify;">BPOM mengumumkan EUA terhadap vaksin Covid-19
                        yang diproduksi Johnson & Johnson, yaitu Janssen Covid-19 Vaccine. Izin penggunaan darurat untuk
                        vaksin Janssen diumumkan BPOM pada 7 September 2021. Vaksin Covid-19 Janssen digunakan untuk
                        kelompok usia 18 tahun ke atas dengan pemberian sekali suntikan atau dosis tunggal sebanyak 0,5
                        mL secara intramuscular. Janssen adalah vaksin yang dikembangkan oleh Janssen Pharmaceutical
                        Companies dengan platform Non-Replicating Viral Vector menggunakan vector Adenovirus (Ad26).
                        Dalam hal efikasi, berdasarkan data interim studi klinik fase 3 pada 28 hari setelah pelaksanaan
                        vaksinasi, efikasi vaksin Janssen untuk mencegah semua gejala Covid-19 adalah sebesar 67,2
                        persen. Kemudian efikasi untuk mencegah gejala Covid-19 sedang hingga berat pada subjek di atas
                        18 tahun adalah sebesar 66,1 persen. Reaksi lokal maupun sistemik dari pemberian vaksin Janssen
                        Covid-19 menunjukkan tingkat keparahan grade 1 dan 2.
                      </p>
                    </div>
                    <div class="form-group">
                      <h4 class="mt-2" style="padding-left: 50px; font-weight: bold;">9. Vaksin Convidecia</h4>
                      <p style="padding-left: 75px; text-align: justify;">EUA terhadap vaksin Covid-19 yang diproduksi
                        CanSino, yaitu Convidecia diumumkan bersamaan dengan vaksin Janssen yaitu pada 7 September 2021.
                        Vaksin Convidecia merupakan vaksin yang dikembangkan oleh CanSino Biological Inc. dan Beijing
                        Institute of Biotechnology juga dengan platform Non-Replicating Viral Vector menggunakan vector
                        Adenovirus (Ad5). Sama seperti Janssen, vaksin Covid-19 Convidecia juga digunakan untuk kelompok
                        usia 18 tahun ke atas dengan pemberian sekali suntikan atau dosis tunggal sebanyak 0,5 mL secara
                        intramuscular. Efikasi vaksin Convidecia untuk perlindungan pada semua gejala Covid-19 adalah
                        sebesar 65,3 persen. Untuk perlindungan terhadap kasus Covid-19 berat, efikasi mencapai 90,1
                        persen. Dari hasil kajian yang telah dilakukan menunjukkan bahwa dari sisi keamanan, secara umum
                        pemberian vaksin Convidecia dapat ditoleransi dengan baik. Seperti Janssen, reaksi lokal maupun
                        sistemik dari pemberian vaksin Convidecia menunjukkan tingkat keparahan grade 1 dan 2. KIPI dari
                        pemberian vaksin Convidecia juga menunjukkan reaksi ringan hingga sedang. KIPI lokal yang umum
                        terjadi, antara lain adalah nyeri, kemerahan, dan pembengkakan, serta KIPI sistemik yang umum
                        terjadi adalah sakit kepala, rasa lelah, nyeri otot, mengantuk, mual, muntah, demam dan diare.
                      </p>
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
  <script src="js/bootstrap.js"></script>
  <script src="index.js"></script>
</body>

</html>