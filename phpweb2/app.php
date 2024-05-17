<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = "SELECT * FROM daftar_game";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

function findGameByID($conn, $id)
{
    $sql = "SELECT * FROM daftar_game WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function gameBaru($conn, $data)
{
    $sql = "INSERT INTO daftar_game
    ( nama_game, jenis_game, developer, tahun_rilis, seru_apa_ga) 
    VALUES (
    '{$data['nama_game']}',
    '{$data['jenis_game']}',
    '{$data['developer']}',
    '{$data['tahun_rilis']}',
    '{$data['seru_apa_ga']}'
);";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

function hapusdata($conn, $id)
{
    // sql to delete a record
    $sql = "DELETE FROM daftar_game WHERE id = $id ";
    if (mysqli_query($conn, $sql)) {
        echo "berhasil menghapus data game";
    } else {
        echo "Error deleting record: kamu tholol " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
