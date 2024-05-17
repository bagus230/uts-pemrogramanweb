<?php
require_once "app.php";

$id = $_GET['id'];

$d = findGameByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Game Detail</title>
</head>

<body>
    <h1>Daftar Game Detail</h1>

    <a href="daftar-game.php">Kembali ke Daftar Game</a>

    <br>
    <br>

    <p>Nama Game : <?= $d['nama_game'] ?></p>
    <p>jenis_game : <?= $d['jenis_game'] ?></p>
    <p>Developer : <?= $d['developer'] ?></p>
    <p>Tahun Rilis : <?= $d['tahun_rilis'] ?></p>
    
</body>

</html>

<?php
mysqli_close($conn);
?>