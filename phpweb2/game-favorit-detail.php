<?php
require_once "data.php";

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game favorit Detail</title>
</head>

<body>
    <h1>Game Favorit Detail</h1>

    <a href="/game-favorit.php">Kembali ke Game-Game Favorit</a>

    <br>
    <br>

    <p>Nama Game : <?= $game_favorit[$id]['nama_game'] ?></p>
    <p>Lama Dimainkan : <?= $game_favorit[$id]['lama_dimainkan'] ?></p>
    <p>Develover: <?= $game_favorit[$id]['developer'] ?></p>
    <p>Tanggal Rilis: <?= $game_favorit[$id]['tanggal_rillis'] ?></p>
    <p>Terakhir Dimainkan: <?= $game_favorit[$id]['terakir_dimainkan'] ?></p>
</body>

</html>