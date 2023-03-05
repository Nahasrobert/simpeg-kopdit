<?php
include 'koneksi/koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($con, "select * from artikel where id_artikel='$id'");
while ($d = mysqli_fetch_array($data)) {

    $file = $d['foto'];
}

unlink("artikel-foto/" . $file);
$hapus = mysqli_query($con, "delete from artikel where id_artikel='$id'");
if ($hapus) {

    header("location:v_artikel.php?pesan=hapus");
} else {

    header("location:v_artikel.php?pesan=gagal");
}
