<?php

//panggil con database
include "admin/koneksi/koneksi.php";

//enkripsi inputan password lama
$password_lama = md5($_POST['pass_lama']);

//panggil nip
$nip = $_POST['nip'];
//uji jika password lama sesuai
$tampil = mysqli_query($con, "SELECT * FROM pegawai WHERE 
                                nip = '$nip' and password = '$password_lama'");
$data = mysqli_fetch_array($tampil);
//jika data ditemukan, maka password sesuai
if ($data) {
    //uji jika password baru dan konfirmasi password sama

    $password_baru = md5($_POST['pass_baru']);
    $konfirmasi_password = md5($_POST['konfirmasi_pass']);

    if ($password_baru == $konfirmasi_password) {
        //proses ganti password
        //enkripsi password baru
        $pass_ok = $konfirmasi_password;

        $ubah = mysqli_query($con, "UPDATE pegawai set password = '$pass_ok'  
                                        WHERE id_pegawai = '$data[id_pegawai]' ");

        if ($ubah) {
            echo "<script>alert('Password anda berhasil diubah, silahkan logout untuk menguji password baru anda.!');document.location='index'</script>";
        }
    } else {
        echo "<script>alert('Maaf, Password Baru & Konfirmasi password yang anda inputkan tidak sama!');document.location='index'</script>";
    }
} else {
    echo "<script>alert('Maaf, Password lama anda tidak sesuai/tidak terdaftar!');document.location='index'</script>";
}
