<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Game Baru</title>
    <style>
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Tambah Daftar Game Baru</h1>
    <a href="daftar-game.php">Kembali ke Daftar Game</a>
    <div class="content">


        <form action="game-store.php" method="post">
            <div>
                <label>Nama Game</label>
                <input type="text" name="nama_game">
            </div>
            <div>
                <label>Jenis Game</label>
                <input type="text" name="jenis_game">
            </div>
            <div>
                <label>Develover</label>
                <input type="text" name="developer">
            </div>
            <div>
                <label>Tahun Rilis</label>
                <input type="text" name="tahun_rilis">
            </div>
            <div>
                <label>Seru Apa Ga</label>
                <input type="text" name="seru_apa_ga">
            </div>
            
            <div style="margin-top: 20px;">
                <input type="submit" value="simpan">
            </div>
        </form>
    </div>

</body>

</html>