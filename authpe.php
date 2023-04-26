<?php
require('admin/koneksi/koneksi.php');
session_start();
if (!isset($_SESSION["nip"])) {
    header("Location: login/index");
    exit();
}
