<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// koneksi database
include 'koneksi/koneksi.php';

// menangkap data yang di kirim dari form

$id_pegawai = $_POST['id_pegawai'];
$tmpt = $_POST['tmpt_mutasi'];
$tgl = $_POST['tgl_mutasi'];
// $sk = $_POST['sk_mutasi'];

$sql = "SELECT * FROM mutasi WHERE id_pegawai = '$id_pegawai'";

$result = mysqli_query($con, $sql);

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['sk_mutasi']['name'];
$ukuran = $_FILES['sk_mutasi']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:v_mutasi.php?pesan=gagal_ekstensi");
} else {
    if (mysqli_num_rows($result) > 0) {
        header("location:v_mutasi.php?pesan=duplikasi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['sk_mutasi']['tmp_name'], 'berkas-sk/' . $rand . '_' . $filename);
            mysqli_query($con, "insert into mutasi values('','$id_pegawai','$tmpt','$tgl','$xx','".date("  Y-m-d H:i:s")."')");
            header("location:v_mutasi.php?pesan=input");
        } else {
            header("location:index.php?alert=gagak_ukuran");
        }
    }
}
  
// menginput data ke database

// mengalihkan halaman kembali ke index.php
