<?php
require_once "app.php";
session_start();

$n = gameBaru($conn, $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_GAME_BARU'] = "Gagal Menambah Data";
} else {
    $_SESSION['BERHASIL_TAMBAH_GAME_BARU'] = "Berhasil menambah data game: {$_POST['nama_game']}, jenis game: {$_POST['jenis_game']}, developer: {$_POST['developer']}";
}

header("Location: /daftar-game.php");
die();
