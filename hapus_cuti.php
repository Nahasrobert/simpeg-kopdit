<?php
include 'admin/koneksi/koneksi.php';

$id = $_GET['id'];
$hapus = mysqli_query($con, "delete from cuti where id_cuti='$id'");
if ($hapus) {

    header("location:v_cuti.php?pesan=hapus");
} else {

    header("location:v_cuti.php?pesan=gagal");
}
