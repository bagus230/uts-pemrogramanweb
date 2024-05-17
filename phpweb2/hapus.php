<?php
require_once "app.php";

$id = $_GET["id"];

if (hapusdata($conn, $id) > 0) {
    echo "<script> alert('data game berhasil dihapus'); </script>
    ";
};


if ($conn) {
    header("Refresh: 0.5; url= /daftar-game.php");
    echo "<script>alert('Hapus data game Berhasil');</script>";
} else {
    echo "<script>alert('Gagal menghapus data game');</script>";
}