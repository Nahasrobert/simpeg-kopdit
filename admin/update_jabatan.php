<?php
// koneksi database
include 'koneksi/koneksi.php';
// menangkap data yang di kirim dari form
$id_jabatan = $_POST['id_jabatan'];
$jabatan = $_POST['jabatan'];

$sql = "SELECT * FROM jabatan WHERE jabatan = '$jabatan' and jabatan =! '$jabatan' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_jabatan.php?pesan=duplikasi");
} else {

    mysqli_query($con, "UPDATE jabatan SET jabatan = '$jabatan' WHERE id_jabatan = '$id_jabatan'");
    header("location:v_jabatan.php?pesan=update");
}
