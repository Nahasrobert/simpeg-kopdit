<?php
// koneksi database
include 'koneksi/koneksi.php';
// menangkap data yang di kirim dari form
var_dump($_POST);
$id_cuti = $_POST['id_cuti'];
$status = $_POST['status_cuti'];
    mysqli_query($con, "UPDATE cuti SET  status_cuti = '$status' WHERE id_cuti = '$id_cuti'");
    header("location:v_cuti.php?pesan=verif");
