<?php
include 'koneksi/koneksi.php';

$id = $_GET['id'];
$hapus = mysqli_query($con, "delete from pegawai where id_pegawai='$id'");
if ($hapus) {

    header("location:v_pegawai.php?pesan=hapus");
} else {

    header("location:v_pegawai.php?pesan=gagal");
}
