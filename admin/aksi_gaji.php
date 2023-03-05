<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// koneksi database
include 'koneksi/koneksi.php';

// menangkap data yang di kirim dari form

$id_pegawai = $_POST['id_pegawai'];
$besar_gaji = $_POST['besar_gaji'];
// $sk = $_POST['sk_gaji'];

$sql = "SELECT * FROM gaji WHERE id_pegawai = '$id_pegawai'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_gaji.php?pesan=duplikasi");
} else {

    mysqli_query($con, "insert into gaji values('','$id_pegawai','$besar_gaji')");
    header("location:v_gaji.php?pesan=input");
}

  
// menginput data ke database

// mengalihkan halaman kembali ke index.php
