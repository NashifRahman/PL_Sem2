<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
   include "../koneksi.php";
   $hasil = mysqli_query($conn, "SELECT * FROM register where id='$id'");
    $buff= mysqli_fetch_assoc($hasil);
        ?>
        <h2>Edit data</h2><br>
            <form action="edit2.php" method="post">
                <table width="487" border="0">
                    <input type="hidden" name="id" value="<?php echo $buff["id"];?>"/>
                    <tr>
                        <td width="150">Nama depan</td>
                        <td width="327"><input type="text" name="namadep" value="<?php echo $buff["namadep"]?>"></td>
                    </tr>
                    <tr>
                        <td width="150">Nama belakang</td>
                        <td width="327"><input type="text" name="namabel" value="<?php echo $buff["namabel"]?>"></td>
                    </tr>
                    <tr>
                        <td width="150">username</td>
                        <td width="327"><input type="text" name="username" value="<?php echo $buff["username"]?>"></td>
                    </tr>
                    <tr>
                        <td width="150">password</td>
                        <td width="327"><input type="text" name="password" value="<?php echo $buff["password"]?>"></td>
                    </tr>
                    <tr>
                        <td width="150">usia</td>
                        <td width="327"><input type="text" name="usia" value="<?php echo $buff["usia"]?>"></td>
                    </tr>
                    <tr>
                        <td width="150">Jenis kelamin</td>
                        <td width="327"><input type="text" name="jk" value="<?php echo $buff["jk"]?>"></td>
                    </tr>
                    <tr>
                        <td width="150">Tempat Tanggal lahir</td>
                        <td width="327"><input type="text" name="ttl" value="<?php echo $buff["ttl"]?>"></td>
                    </tr>
                    <tr>
                        <td width="150">email</td>
                        <td width="327"><input type="text" name="email" value="<?php echo $buff["email"]?>"></td>
                    </tr>
                    <tr>
                        <td width="150">No telepon</td>
                        <td width="327"><input type="text" name="notel" value="<?php echo $buff["notel"]?>"></td>
                    </tr>
                    <tr>
                        <td height="68" align="right"><input type="reset" value="reset"></td>
                        <td><input type="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
</body>
</html>