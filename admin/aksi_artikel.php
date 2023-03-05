<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// koneksi database
include 'koneksi/koneksi.php';

// menangkap data yang di kirim dari form

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl = $_POST['tanggal'];
// $sk = $_POST['foto'];

$sql = "SELECT * FROM artikel WHERE judul = '$judul'";

$result = mysqli_query($con, $sql);

$rand = rand();
$ekstensi =  array('jpg');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:v_artikel.php?pesan=gagal_ekstensi");
} else {
    if (mysqli_num_rows($result) > 0) {
        header("location:v_artikel.php?pesan=duplikasi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'artikel-foto/' . $rand . '_' . $filename);
            mysqli_query($con, "insert into artikel values('','$judul','$isi','$tgl','$xx')");
            header("location:v_artikel.php?pesan=input");
        } else {
            header("location:index.php?alert=gagak_ukuran");
        }
    }
}
  
// menginput data ke database

// mengalihkan halaman kembali ke index.php
