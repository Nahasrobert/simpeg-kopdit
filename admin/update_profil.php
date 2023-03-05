<?php
// koneksi database
include 'koneksi/koneksi.php';
// menangkap data yang di kirim dari form
// $id_profil = $_POST['id_profil'];
$nama = $_POST['nama'];
$sejarah = $_POST['sejarah'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];

mysqli_query($con, "UPDATE profil SET nama = '$nama', sejarah = '$sejarah',visi ='$visi', misi='$misi' ");
header("location:edit_profil.php?pesan=update");
