<?php
// koneksi database
include 'admin/koneksi/koneksi.php';
// menangkap data yang di kirim dari form
$id_pegawai = $_POST['id_pegawai'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$id_jabatan = $_POST['id_jabatan'];
$pt = $_POST['pt'];
$status = $_POST['status'];
// $lama = $_POST['lama_pegawai'];
$sql = "SELECT * FROM pegawai WHERE nama = '$nama' and nama =! '$nama' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:v_pegawai.php?pesan=duplikasi");
} else {
    mysqli_query($con, "UPDATE pegawai SET nama = '$nama',nip = '$nip', tempat_lahir = '$tempat_lahir',tgl_lahir = '$tgl_lahir',jk = '$jk',
    id_jabatan = '$id_jabatan', pend_terakhir= '$pt', status='$status' WHERE id_pegawai = '$id_pegawai'");
    header("location:v_pegawai.php?pesan=update");
}
