<?php
// koneksi database
include 'koneksi/koneksi.php';
// menangkap data yang di kirim dari form
$id_mutasi = $_POST['id_mutasi'];
$id_pegawai = $_POST['id_pegawai'];
$tmpt = $_POST['tmpt_mutasi'];
$tgl = $_POST['tgl_mutasi'];

// cek apakah ada file sk_mutasi yang diupload atau tidak
if ($_FILES['sk_mutasi']['error'] == UPLOAD_ERR_NO_FILE) {
    // jika tidak ada file yang diupload, update data tanpa mengubah file SK
    mysqli_query($con, "UPDATE mutasi SET id_pegawai = '$id_pegawai', tmpt_mutasi = '$tmpt', tgl_mutasi = '$tgl' WHERE id_mutasi = '$id_mutasi'");
    header("location:v_mutasi.php?pesan=update");
} else {
    // jika ada file yang diupload, lakukan pengecekan dan update data dengan mengubah file SK
    $rand = rand();
    $ekstensi =  array('pdf');
    $filename = $_FILES['sk_mutasi']['name'];
    $ukuran = $_FILES['sk_mutasi']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:v_mutasi.php?pesan=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['sk_mutasi']['tmp_name'], 'berkas-sk/' . $rand . '_' . $filename);
            mysqli_query($con, "UPDATE mutasi SET id_pegawai = '$id_pegawai', tmpt_mutasi = '$tmpt', tgl_mutasi = '$tgl', sk_mutasi = '$xx' WHERE id_mutasi = '$id_mutasi'");
            header("location:v_mutasi.php?pesan=update");
        } else {
            header("location:index.php?alert=gagak_ukuran");
        }
    }
}
