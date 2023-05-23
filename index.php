<?php
function check_link($link)
{
    if (isset($_GET["module"])) {
        $nama_file = $_GET["module"];

        if ($link == $nama_file) {
            return "selected";
        }
    } else {
        if ($link == "") {
            return "selected";
        }
    }
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>mywebsite</title>

    <link href="style/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="header1">
        <div id="container">
            <div id="header">
            </div>
            <div id="bungkus">
                <div id="bungkus2">
                    <div id="sidebar">
                        <h3>navigasi</h3>
                        <ul id="navmenu">
                            <li><a href="index.php" class="<?= check_link("") ?>">Form</a></li>
                            <li><a href="?module=lihat#pos" class="<?= check_link("lihat") ?>">Lihat</a></li>
                            <li><a href="?module=cari#pos" class="<?= check_link("cari") ?>">Cari</a></li>
                        </ul>
                    </div>
                    <div id="in">
                        <form action="?module=loginproc#pos" method="post" class="form">
                            Username
                            <input type="text" name="username" style="width:150px">

                            Password
                            <input type="password" name="pass" style="width:150px">
                            <input type="submit" value="login">
                        </form>
                    </div>
                </div>
                <div id="page">
                    <?php
                    if (isset($_GET["module"])) {
                        $Nama_file = $_GET["module"];
                        include "module/$Nama_file.php";
                    } else
                        include "uinform.php";
                    ?>
                </div>
            </div>

            <div id="clear"></div>

            <div id="footer">
                <p>&copy; 2010</p>
            </div>
        </div>
    </div>
</body>

</html>