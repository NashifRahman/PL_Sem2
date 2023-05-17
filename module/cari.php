<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cari Member</h2>
    <form action="?module=cari" method="get">
        <input type="hidden" name="module" value="cari" />
        <input type="text" name="username" placeholder="Ketikan username" />
        <input type="submit" value="cari">
    </form><br>

    <h2>Hasil pencarian</h2>
    <?php
    include "koneksi.php";
    if(isset($_GET['username'])){
    $username = $_GET['username'];
    $hasil = mysqli_query($conn, "SELECT * FROM register where `username` like '$username'");
    }
    ?>
    <div>
    <table  border="1">
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
    if(isset($_GET['username'])):
    while($buff = mysqli_fetch_assoc($hasil)):
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
            <td ><a href="edit.php?id=<?php echo $buff["id"];?>">edit</a></td>
            <td ><a href="hapus.php?id=<?php echo $buff["id"];?>">hapus</a></td>
        </tr>
    <?php
    endwhile;
endif;
?>
    </table>
    </div>
    <br>
    <a href="index.php"><---- Kembali ke index</a>
</body>
</html>