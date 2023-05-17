<?php
include "../koneksi.php";
$id = $_GET['id'];
$hapus = "DELETE FROM register where id='$id'";
// $hasil = mysqli_query($conn, "DELETE FROM register where id='$id'");

if(!mysqli_query($conn, $hapus))
die (mysqli_error($conn));

echo"<script>alert('Selamat, data telah di hapus');window.location.href='../';</script>";

mysqli_close($conn);
?>