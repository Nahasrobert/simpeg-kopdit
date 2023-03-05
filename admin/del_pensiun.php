<?php
include 'koneksi/koneksi.php';

$id = $_GET['id'];
$hapus = mysqli_query($con, "delete from pensiun where id_pensiun='$id'");
if ($hapus) {

    header("location:v_pensiun.php?pesan=hapus");
} else {

    header("location:v_pensiun.php?pesan=gagal");
}
