<<?php

  require 'koneksi.php';

  if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
  }

  $id = $_GET['id'];
  $datbar = query("SELECT * FROM barang WHERE id=$id");
  // var_dump($datbar[0]['nama']);
  ?> <!doctype html>
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

    <!--stok-->
    <section class="stok">
      <div class="container">
        <br>
        <h3><i class="#"></i> Detail Barang</h3>
        <hr>

        <!-- detail barang -->

        <ul class="list-group">
          <li class="list-group-item active"><?= $datbar['nama_barang']; ?></li>
          <li class="list-group-item">harga : <?= $datbar['harga']; ?></li>
          <li class="list-group-item">stock barang : <?= $datbar['stock_barang']; ?></li>
          <li class="list-group-item"><img src="image/<?= $datbar['foto']; ?>" alt="" width="200px"></li>
          <li class="list-group-item">
            <a href="edit.php?id=<?= $datbar['id'];  ?>" class="btn btn-warning" role="button">Edit</a> |
            <a href="hapus.php?id=<?= $datbar['id'];  ?>" onclick="return confirm('apakah anda akan menghapus data ini');" class="btn btn-danger" role="button">Hapus</a> |
            <a href="stock.php" class="btn btn-primary" role="button">Kembali</a>
          </li>
        </ul>
      </div>
      </div>
  </body>

  </html>