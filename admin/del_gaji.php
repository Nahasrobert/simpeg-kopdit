<?php
include 'koneksi/koneksi.php';

$id = $_GET['id'];
$hapus = mysqli_query($con, "delete from gaji where id_gaji='$id'");
if ($hapus) {

    header("location:v_gaji.php?pesan=hapus");
} else {

    header("location:v_gaji.php?pesan=gagal");
}
