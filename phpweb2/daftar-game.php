<?php
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Game</title>
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
        h1{
        
        background-color: gray;
        text-align: left;
        padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Daftar Game Saya</h1>

    <a href="/">Kembali ke home</a>

    <br>

    <a href="/game-tambah.php">Tambahin lagehh</a>

    <br>
    <br>

    <?php if (isset($_SESSION['BERHASIL_TAMBAH_GAME_BARU'])) : ?>
        <p><?= $_SESSION['BERHASIL_TAMBAH_GAME_BARU'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Nama Game</th>
                <th>Jenis Game</th>
                <th>Developer</th>
                <th>Lihat Lebih Detail/Tambahkan Game</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($p as $k => $v) : ?>
                <tr>
                    <td><?= $v['nama_game'] ?></td>
                    <td><?= $v['jenis_game'] ?></td>
                    <td><?= $v['developer'] ?></td>
                    <td>
                        <a href="<?= "/daftar-game-detail.php?id={$v['id']}" ?>">Detail</a>
                        <a href="<?= "/game-edit.php?id={$v['id']}" ?>">Edit</a>
                        <a href="<?= "/hapus.php?id={$v['id']}" ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
     
    </table>
</body>

</html>

<?php
mysqli_close($conn);
?>