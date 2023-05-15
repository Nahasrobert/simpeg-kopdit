<!-- @format -->

<!-- @format -->
<?php
//include auth file on all secure pages
include("authpe.php");
include 'admin/koneksi/koneksi.php';
$data = mysqli_query($con, "select * from pegawai where nip ='".$_SESSION['nip']."'");
while ($d = mysqli_fetch_array($data)) {
                               
?>
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
        <h1><a href="#">SIMPEG</a></h1>
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
          <!-- <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_pegawai.php') {
                echo ' class="active"';
              } ?>>
            <a href="v_pegawai"><i class="fa fa-users" aria-hidden="true"></i> Pegawai</a>
          </li> -->
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
      
          <li class="dropdown"><a href="#"><span><?php echo $d['nama']; ?></span> <i class="bi bi-chevron-right"></i></a>
                <ul>   
                <li><a href="#" data-toggle="modal" data-target="#ubahpegawai<?php echo $d['id_pegawai']; ?>">Profil</a></li>
         
               
                  <li><a href="#" data-toggle="modal" data-target="#exampleModal">Ubah Password</a></li>
                  <li><a href="keluar">Logout</a></li>
             
                </ul>
              </li>
        </ul>
       
      

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
    

    
  </header>

                     
                        
  <div class="modal fade" id="ubahpegawai<?php echo $d['id_pegawai']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="ubah_pegawai.php" enctype="multipart/form-data">
                    <input type="hidden" required name="id_pegawai" value="<?php echo $d['id_pegawai']; ?>" class="form-control input-sm" placeholder="Masukan NIP">

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <div class="nk-int-st">
                                            <input type="text" readonly name="nip" value="<?php echo $d['nip']; ?>" class="form-control input-sm" placeholder="Masukan NIP">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <div class="nk-int-st">
                                            <input type="text" required name="nama" value="<?php echo $d['nama']; ?>" class="form-control input-sm" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <div class="nk-int-st">
                                            <input type="text" required name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>" class="form-control input-sm" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <div class="nk-int-st">
                                            <input type="date" required name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" class="form-control input-sm" placeholder="Tempat Mutasi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <div class="nk-int-st">
                                        <select name="id_jabatan" class="form-control" required data-live-search="true">
                                                                <?php
                                                                $query_jab = "SELECT * FROM jabatan";
                                                                $sql_jab = mysqli_query($con, $query_jab);
                                                                while ($jab = mysqli_fetch_assoc($sql_jab)) {
                                                                    if ($d['id_jabatan'] == $jab['id_jabatan']) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                    echo "<option value='$jab[id_jabatan]' size='20' $select>$jab[jabatan]</option>";
                                                                }
                                                                ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="nk-int-st">
                                        <?php $jk = $d['jk']; ?>
                                        <select name="jk" class="form-control" required data-live-search="true">
                                            <option type="disible">-- Silahkan Pilih --</option>
                                            <option <?php echo ($jk == 'Laki-laki') ? "selected" : "" ?>>Laki-laki</option>
                                            <option <?php echo ($jk == 'Perempuan') ? "selected" : "" ?>>Perempuan</option>
                                        </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <div class="nk-int-st">
                                                            <?php $pt = $d['pend_terakhir']; ?>

                                                            <select name="pt" class="form-control" required data-live-search="true">
                                                                <option type="disible">-- Silahkan Pilih --</option>
                                                                <option <?php echo ($pt == 'TAMAT SD / SEDERAJAT') ? "selected" : "" ?>>TAMAT SD / SEDERAJAT</option>
                                                                <option <?php echo ($pt == 'TIDAK / BELUM SEKOLAH') ? "selected" : "" ?>>TIDAK / BELUM SEKOLAH</option>
                                                                <option <?php echo ($pt == 'SLTA / SEDERAJAT') ? "selected" : "" ?>>SLTA / SEDERAJAT</option>
                                                                <option <?php echo ($pt == 'SLTP/SEDERAJAT') ? "selected" : "" ?>>SLTP/SEDERAJAT</option>
                                                                <option <?php echo ($pt == 'BELUM TAMAT SD/SEDERAJAT') ? "selected" : "" ?>>BELUM TAMAT SD/SEDERAJAT</option>
                                                                <option <?php echo ($pt == 'DIPLOMA IV/ STRATA I') ? "selected" : "" ?>>DIPLOMA IV/ STRATA I</option>
                                                                <option <?php echo ($pt == 'DIPLOMA I / II') ? "selected" : "" ?>>DIPLOMA I / II</option>
                                                                <option <?php echo ($pt == 'AKADEMI/ DIPLOMA III/S. MUDA') ? "selected" : "" ?>>AKADEMI/ DIPLOMA III/S. MUDA</option>
                                                                <option <?php echo ($pt == 'STRATA II') ? "selected" : "" ?>>STRATA II</option>
                                                                <option <?php echo ($pt == 'STRATA III') ? "selected" : "" ?>>STRATA III</option>
                                                            </select>

                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="nk-int-st">
                                                            <?php $status = $d['status']; ?>
                                                            <select name="status" class="form-control" required data-live-search="true">
                                                                <option type="disible">-- Silahkan Pilih --</option>
                                                                <option <?php echo ($status == 'Kawin') ? "selected" : "" ?>>Kawin</option>
                                                                <option <?php echo ($status == 'Belum Kawin') ? "selected" : "" ?>>Belum Kawin
                                                            </select>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-success notika-btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
  </div>
  <!-- End Header -->
<?php } ?>







  <!-- ======= Hero Section ======= -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="post" action="ganti_password.php">
                    <input type="hidden" name="nip" value="<?= $_SESSION['nip'] ?>">
                    <div class="form-group">
                        <label>Masukkan Password Lama Anda!</label>
                            <input type="password" class="form-control input-sm" name="pass_lama" required>
                    </div>
                    <div class="form-group">
                        <label>Masukkan Password Baru Anda!</label>
                            <input type="password" class="form-control input-sm" name="pass_baru" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password Baru Anda!</label>
                            <input type="password" class="form-control input-sm" name="konfirmasi_pass" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
           
                </form>
                </div>
            </div>
        </div>
        </div>
        

        