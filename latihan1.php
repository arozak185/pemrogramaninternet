<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="nama" id="nama">Masukan Nama: </label>
    <input type="text"name="nama">
    <button type ="submit"name="submit">Proses</button>
</form>
<?php
    if (isset($_POST['submit'])) {
        echo "Selamat Datang, " ."<b>" .$_POST['nama'] ."</b>";
        }
?>
</body>
</html>