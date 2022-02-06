<?php

require 'koneksi.php';

if (isset($_POST['tambah'])) {
  if (tambahd($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'stock.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal ditambah');
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
            <a class="nav-link" href="tambah.php">Input Barang</a>
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

  <!-- input barang -->
  <!-- konten -->
  <br>
  <div class="container">
    <h3><i class="fas fa-mouse"></i> Input data Barang </h3>
    <hr>

    <form method="POST" action="">
      <div class="form-group">
        <label for="nama">Nama Barang : </label>
        <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama_barang" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="alamat">Stok : </label>
        <input type="text" class="form-control" id="alamat" placeholder="Stock Barang" name="stock_barang" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Harga : </label>
        <input type="text" class="form-control" id="jenis_kelamin" placeholder="Harga Barang" name="harga" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="foto_maba">foto : </label>
        <input type="text" class="form-control" id="foto_maba" placeholder="input foto" name="foto" required autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
    </form>


  </div>
  </div>
</body>
</body>

</html>