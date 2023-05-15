<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// koneksi database
include 'koneksi/koneksi.php';

// menangkap data yang di kirim dari form

// $id_pegawai = $_POST['id_pegawai'];
$jabatan = $_POST['jabatan'];
// $sk = $_POST['sk_jabatan'];

$sql = "SELECT * FROM jabatan WHERE jabatan = '$jabatan'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_jabatan.php?pesan=duplikasi");
} else {

    mysqli_query($con, "insert into jabatan values('','$jabatan','".date("  Y-m-d H:i:s")."')");
    header("location:v_jabatan.php?pesan=input");
}

  
// menginput data ke database

// mengalihkan halaman kembali ke index.php
