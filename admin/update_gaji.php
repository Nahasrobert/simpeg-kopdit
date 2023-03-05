<?php
// koneksi database
include 'koneksi/koneksi.php';
// menangkap data yang di kirim dari form
$id_gaji = $_POST['id_gaji'];
$id_pegawai = $_POST['id_pegawai'];
$besar_gaji = $_POST['besar_gaji'];
// $lama = $_POST['lama_gaji'];
$sql = "SELECT * FROM gaji WHERE id_pegawai = '$id_pegawai' and id_gaji =! '$id_pegawai' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_gaji.php?pesan=duplikasi");
} else {

    mysqli_query($con, "UPDATE gaji SET id_pegawai = '$id_pegawai', besar_gaji = '$besar_gaji' WHERE id_gaji = '$id_gaji'");
    header("location:v_gaji.php?pesan=update");
}
