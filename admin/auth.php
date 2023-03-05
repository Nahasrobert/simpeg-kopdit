<?php
require('koneksi/koneksi.php');
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../login.php");
    exit();
}
