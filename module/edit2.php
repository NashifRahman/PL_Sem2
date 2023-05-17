<?php
include "../koneksi.php";
// $namadep = $_POST["namadep"];
// $namabel = $_POST["namabel"];
// $username = $_POST["username"];
// $password = $_POST["password"];
// $usia = $_POST["usia"];
// $jk = $_POST["jk"];
// $ttl = $_POST["ttl"];
// $email = $_POST["email"];
// $notel = $_POST["notel"];

$edit = "UPDATE register SET namadep='$_POST[namadep]', namabel='$_POST[namabel]', username='$_POST[username]', 
password='$_POST[password]', usia='$_POST[usia]', jk='$_POST[jk]', ttl='$_POST[ttl]', 
email='$_POST[email]', notel='$_POST[notel]' where id='$_POST[id]'";

// ('$namadep', '$namabel', '$username', '$password', 
// '$usia', '$jk', '$ttl', '$email', '$notel')

if(!mysqli_query($conn, $edit))
die (mysqli_error($conn));

echo"<script>alert('Selamat, data telah di update');window.location.href='../index.php';</script>";

mysqli_close($conn);
?>