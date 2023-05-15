<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// koneksi database
include 'admin/koneksi/koneksi.php';

// menangkap data yang di kirim dari form

$id_pegawai = $_POST['id_pegawai'];
$tgl = $_POST['tgl_cuti'];
$lama = $_POST['lama_cuti'];
$status = $_POST['status_cuti'];

// $sk = $_POST['sk_cuti'];
    mysqli_query($con, "insert into cuti values('','$id_pegawai','$tgl','$lama','$status','".date("  Y-m-d H:i:s")."')");
    header("location:v_cuti.php?pesan=input");

  
// menginput data ke database

// mengalihkan halaman kembali ke index.php
