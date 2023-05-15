<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// koneksi database
include 'koneksi/koneksi.php';

// menangkap data yang di kirim dari form
// var_dump($_POST); die();

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$id_jabatan = $_POST['id_jabatan'];
$jk = $_POST['jk'];
$pt = $_POST['pt'];
$status = $_POST['status'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM pegawai WHERE nip = '$nip'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_pegawai.php?pesan=duplikasi");
} else {

    mysqli_query($con, "insert into pegawai values('','$nip','$nama','$tempat_lahir','$tgl_lahir','$jk','$id_jabatan','$pt','$status','$password','".date("  Y-m-d H:i:s")."')");
    header("location:v_pegawai.php?pesan=input");
}

  
// menginput data ke database

// mengalihkan halaman kembali ke index.php
