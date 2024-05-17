<?php
require_once "app.php";
$id = $_GET['id'];

if (isset($_POST["submit"])) {
  $nama_game = $_POST['nama_game'];
  $jenis_game = $_POST['jenis_game'];
  $developer = $_POST['developer'];
  $tahun_rilis = $_POST['tahun_rilis'];

  $sql = "UPDATE daftar_game SET nama_game ='$nama_game', jenis_game ='$jenis_game', developer ='$developer', tahun_rilis='$tahun_rilis' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Refresh: 0.5; url= /daftar-game.php");
    exit;
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Daftar Game</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="back">
  <?php
  $sql = "SELECT * FROM daftar_game WHERE id = $id LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $v = mysqli_fetch_assoc($result);
  ?>
  <div class="content">
    <div class="back-arrow">
      <a href="/produk.php"><i class="bi bi-arrow-left-circle"></i></a>
    </div>
    <form method="post">
      <div class="judul">
        <h1>Edit Daftar Game</h1>
        <p>Silahkan edit daftar game</p>
      </div>
      <div>
        <input type="hidden" name="id" value="<?php echo $v["id"]; ?>">
      </div>
      <div>
        <label>Nama Game</label>
        <input type="text" name="nama_game" value="<?php echo $v["nama_game"]; ?>">
      </div>
      <div>
        <label>Jenis Game</label>
        <input type="text" name="jenis_game" value="<?php echo $v["jenis_game"]; ?>">
      </div>
      <div>
        <label>Developer</label>
        <input type="text" name="developer" value="<?php echo $v["developer"]; ?>">
      </div>
      <div>
        <label>Tahun Rilis</label>
        <input type="text" name="tahun_rilis" value="<?php echo $v["tahun_rilis"]; ?>">
      </div>
      <div>
        <input type="submit" name="submit" value="simpan">
      </div>
    </form>
  </div>
</body>

</html>