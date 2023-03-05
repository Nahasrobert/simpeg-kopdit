<?php
// koneksi database
include 'koneksi/koneksi.php';
// menangkap data yang di kirim dari form
$id_artikel = $_POST['id_artikel'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl = $_POST['tanggal'];

// cek apakah ada file foto yang diupload atau tidak
if ($_FILES['foto']['error'] == UPLOAD_ERR_NO_FILE) {
    // jika tidak ada file yang diupload, update data tanpa mengubah file Foto
    mysqli_query($con, "UPDATE artikel SET judul = '$judul', isi = '$isi', tanggal = '$tgl' WHERE id_artikel = '$id_artikel'");
    header("location:v_artikel.php?pesan=update");
} else {
    // jika ada file yang diupload, lakukan pengecekan dan update data dengan mengubah file Foto
    $rand = rand();
    $ekstensi =  array('jpg');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:v_artikel.php?pesan=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $foto = $rand . '_' . $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'artikel-foto/' . $rand . '_' . $filename);
            mysqli_query($con, "UPDATE artikel SET judul = '$judul', isi = '$isi', tanggal = '$tgl', foto = '$foto' WHERE id_artikel = '$id_artikel'");
            header("location:v_artikel.php?pesan=update");
        } else {
            header("location:v_artikel.php?pesan=gagak_ukuran");
        }
    }
}
