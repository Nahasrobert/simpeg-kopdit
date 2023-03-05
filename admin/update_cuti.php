<?php
// koneksi database
include 'koneksi/koneksi.php';
// menangkap data yang di kirim dari form
$id_cuti = $_POST['id_cuti'];
$id_pegawai = $_POST['id_pegawai'];
$tgl = $_POST['tgl_cuti'];
$lama = $_POST['lama_cuti'];
$sql = "SELECT * FROM cuti WHERE id_pegawai = '$id_pegawai' and id_cuti =! '$id_pegawai' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_cuti.php?pesan=duplikasi");
} else {

    mysqli_query($con, "UPDATE cuti SET id_pegawai = '$id_pegawai', tanggal_cuti = '$tgl', lama_cuti = '$lama' WHERE id_cuti = '$id_cuti'");
    header("location:v_cuti.php?pesan=update");
}
