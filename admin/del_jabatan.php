<?php
include 'koneksi/koneksi.php';

$id = $_GET['id'];
$hapus = mysqli_query($con, "delete from jabatan where id_jabatan='$id'");
if ($hapus) {

    header("location:v_jabatan.php?pesan=hapus");
} else {

    header("location:v_jabatan.php?pesan=gagal");
}
