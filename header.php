<!-- @format -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>SIMPEG - Kopdit Sinar Harapan</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="admin/img/favicon.png" rel="icon" />
  <!-- <link href="admin/img/apple-touch-icon.png" rel="apple-touch-icon" /> -->
  <script src="assets/css/sweetalert.min.js"></script>

  <!-- Google Fonts -->
  <link href="assets/css/css.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="admin/css/bootstrap.min.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="admin/css/main.css">
  <link rel="stylesheet" href="admin/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="admin/style.css">

  <!-- responsive CSS
		============================================ -->
  <!-- <link rel="stylesheet" href="admin/css/responsive.css"> -->

  <!-- style CSS
		============================================ -->
  <!-- responsive CSS
		============================================ -->
  <!-- modernizr JS
		============================================ -->

  <!-- =======================================================
  * Template Name: SoftLand - v4.10.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1><a href="index.html">SIMPEG</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                echo 'class="active"';
              } ?>>
            <a href="index"><i class="notika-icon notika-house"></i> Beranda</a>
          </li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_pegawai.php') {
                echo ' class="active"';
              } ?>>
            <a href="v_pegawai"><i class="fa fa-users" aria-hidden="true"></i> Pegawai</a>
          </li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_mutasi.php') {
                echo ' class="active"';
              } ?>>
            <a href="v_mutasi"><i class="fa fa-arrows" aria-hidden="true"></i> Mutasi</a>
          </li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_cuti.php') {
                echo ' class="active"';
              } ?>>
            <a href="v_cuti"><i class="fa fa-universal-access" aria-hidden="true"></i> Cuti</a>
          </li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_gaji.php') {
                echo ' class="active"';
              } ?>>
            <a href="v_gaji"><i class="fa fa-money" aria-hidden="true"></i> Gaji</a>
          </li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_pensiun.php') {
                echo ' class="active"';
              } ?>>
            <a href="v_pensiun"><i class="fa fa-list-alt" aria-hidden="true"></i>Pensiun</a>
          </li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_artikel.php') {
                echo ' class="active"';
              } ?>>
            <a href="v_artikel"><i class="fa fa-handshake-o" aria-hidden="true"></i> Artikel</a>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') {
                echo ' class="active"';
              } ?>>
            <a href="login"><i class="fa fa-handshake-o" aria-hidden="true"></i> Login Admin</a>
          </li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->