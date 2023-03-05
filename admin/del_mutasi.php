<?php
include 'koneksi/koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($con, "select * from mutasi where id_mutasi='$id'");
while ($d = mysqli_fetch_array($data)) {

    $file = $d['sk_mutasi'];
}

unlink("berkas-sk/" . $file);
$hapus = mysqli_query($con, "delete from mutasi where id_mutasi='$id'");
if ($hapus) {   

    header("location:v_mutasi.php?pesan=hapus");
} else {

    header("location:v_mutasi.php?pesan=gagal");
}
