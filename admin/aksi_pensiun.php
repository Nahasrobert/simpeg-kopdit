<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// koneksi database
include 'koneksi/koneksi.php';

// menangkap data yang di kirim dari form

$id_pegawai = $_POST['id_pegawai'];
$tgl = $_POST['tgl_pensiun'];
// $lama = $_POST['lama_pensiun'];
// $sk = $_POST['sk_pensiun'];

$sql = "SELECT * FROM pensiun WHERE id_pegawai = '$id_pegawai'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_pensiun.php?pesan=duplikasi");
} else {

    mysqli_query($con, "insert into pensiun values('','$id_pegawai','$tgl')");
    header("location:v_pensiun.php?pesan=input");
}

  
// menginput data ke database

// mengalihkan halaman kembali ke index.php
