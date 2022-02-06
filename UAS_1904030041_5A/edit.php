<?php

require 'koneksi.php';

$id = $_GET['id'];
$datbar = query("SELECT * FROM barang WHERE id = $id");
// var_dump($datbar['nama']);

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'stock.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal diedit');
    </script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="#">
  <link rel="stylesheet" type="text/css" href="tema/fontawesome/css/all.min.css">

  <title>Online Store</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="image/logo.png" alt="" width="50" height="50" class="rounded-circle img-thumbnail me-2">
        AP <strong>Store</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stock.php">Stock Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="komen.php">Komentar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--akhir navbar-->

  <!--edit barang-->
  <div class="container">
    <br>
    <form method="POST" action="">
      <input type="hidden" class="form-control" value="<?= $datbar['id'] ?>" name="id">

      <div class="form-group">
        <label for="nama_barang">Nama barang : </label>
        <input type="text" class="form-control" id="nama_barang" value="<?= $datbar['nama_barang'] ?>" placeholder="nama barang" name="nama_barang" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="harga">Harga : </label>
        <input type="text" class="form-control" id="harga" value="<?= $datbar['harga'] ?>" placeholder="Harga" name="harga" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="stock_barang">Stock barang : </label>
        <input type="text" class="form-control" id="stock_barang" value="<?= $datbar['stock_barang'] ?>" placeholder="Stock barang" name="stock_barang" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="foto">foto : </label>
        <input type="text" class="form-control" id="foto" value="<?= $datbar['foto'] ?>" placeholder="foto" name="foto" required autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="edit"> Simpan</button>
      <a href="stock.php" class="btn btn-primary" role="button">Kembali</a>
    </form>


  </div>
  </div>
</body>

</html>