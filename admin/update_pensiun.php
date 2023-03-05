<?php
// koneksi database
include 'koneksi/koneksi.php';
// menangkap data yang di kirim dari form
$id_pensiun = $_POST['id_pensiun'];
$id_pegawai = $_POST['id_pegawai'];
$tgl = $_POST['tgl_pensiun'];
// $lama = $_POST['lama_pensiun'];
$sql = "SELECT * FROM pensiun WHERE id_pegawai = '$id_pegawai' and id_pensiun =! '$id_pegawai' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_pensiun.php?pesan=duplikasi");
} else {

    mysqli_query($con, "UPDATE pensiun SET id_pegawai = '$id_pegawai', tgl_pensiun = '$tgl' WHERE id_pensiun = '$id_pensiun'");
    header("location:v_pensiun.php?pesan=update");
}
