<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="cale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Member</h2>
    <?php
    include "koneksi.php";
    $hasil = mysqli_query($conn, "SELECT * FROM register");
    ?>
    <table width="800" border="1">
        <tr>
            <td >id</td>
            <td >nama depan</td>
            <td >nama belakang</td>
            <td >username</td>
            <td >password</td>
            <td >usia</td>
            <td >jk</td>
            <td >ttl</td>
            <td >email</td>
            <td >notel</td>
            <td colspan="2">aksi</td>
        </tr>
    <?php
    while($buff= mysqli_fetch_assoc($hasil)){
        ?>
        <tr>
            <td ><?php echo $buff["id"];?></td>
            <td ><?php echo $buff['namadep'];?></td>
            <td ><?php echo $buff["namabel"];?></td>
            <td ><?php echo $buff["username"];?></td>
            <td ><?php echo $buff["password"];?></td>
            <td ><?php echo $buff["usia"];?></td>
            <td ><?php echo $buff["jk"];?></td>
            <td ><?php echo $buff["ttl"];?></td>
            <td ><?php echo $buff["email"];?></td>
            <td ><?php echo $buff["notel"];?></td>
            <td ><a href="module/edit.php?id=<?php echo $buff["id"];?>">edit</a></td>
            <td ><a href="module/hapus.php?id=<?php echo $buff["id"];?>">hapus</a></td>
        </tr>
    <?php
    };
    ?>
    </table>
    <br>
    <a href="index.php"><---- Kembali ke index</a>
</body>
</html>
<!-- 200" -->