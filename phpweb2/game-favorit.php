<?php
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game favorit</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Game-Game Favorit</h1>

    <a href="/">Kembali ke home</a>

    <br>
    <br>

    <table>
        <thead>
            <tr>
                <th>Game</th>
                <th>Berapa lama dimainkan</th>
                <th>Lebih Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($game_favorit as $k => $v) : ?>
                <tr>
                    <td><?= $v['nama_game'] ?></td>
                    <td><?= $v['lama_dimainkan'] ?></td>
                    <td><a href="<?= "/game-favorit-detail.php?id={$k}" ?>">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>