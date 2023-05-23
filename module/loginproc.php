<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['pass'];

$login = mysqli_query($conn, "SELECT * FROM register where `username` = '$username' AND `password` = '$password'");
$rowcount = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if (mysqli_num_rows($login) == 1) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['pass'] = $data['pass'];
    echo "<script>alert('Anda berhasil masuk');window.location.href='?module=indexuser#pos';</script>";
} else {
    echo "<script>alert('Anda gagal masuk');window.location.href='index.php';</script>";
}
?>