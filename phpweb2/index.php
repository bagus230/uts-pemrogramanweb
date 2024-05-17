<?php
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
        
            background-color: gray;
            text-align: left;
            padding: 20px;
        }
        
        
    </style>
</head>

<body>
    <h1>Halo Saya <?= $dataDiri['nama'] ?></h1>
    <a href="daftar-game.php">Daftar Game Saya</a>
    <br>
    <a href="game-favorit.php">Game Favorit saya</a>
</body>

</html>