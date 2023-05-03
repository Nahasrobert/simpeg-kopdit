<?php
require('koneksi/koneksi.php');
session_start();
if ($_SESSION['level'] != "admin" and $_SESSION['level'] != "general manager") {
    header("Location: ../loginadm");
    exit();
}