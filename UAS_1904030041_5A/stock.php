<<?php

  require 'koneksi.php';
  $datbar = query("SELECT * FROM barang");

  if (isset($_POST['cari'])) {
    $datbar = cari($_POST['keyword']);
  }

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

    <!--stok-->
    <section class="stok">
      <div class="container">
        <br>
        <h3><i class="fas fa-list-ul"></i> Daftar Barang</h3>
        <hr>

        <!-- pencarian data -->
        <form action="" method="POST">
          <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
          <button type="submit" class="btn btn-primary" name="cari">CARI</button>
          <a href="stock.php" class="btn btn-primary" role="button">Kembali</a>
        </form>

        <br>
        <hr>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama barang</th>
              <th scope="col">Stok</th>
              <th scope="col">Harga</th>
              <th scope="col">Foto</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>

          <?php if (empty($datbar)) : ?>
            <tr>
              <td colspan="4" class="alert alert-danger text-center" role="alert">
                <p><b>
                    data Mahasiswa tidak ditemukan</p>
                </b>
              </td>
            </tr>
          <?php endif; ?>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($datbar as $dbr) : ?>
              <tr>
                <th scope="row"><?php echo $no ?></th>
                <td><?php echo $dbr['nama_barang']; ?></td>
                <td><?php echo $dbr['stock_barang']; ?></td>
                <td><?php echo $dbr['harga']; ?></td>
                <td><img src="image/<?php echo $dbr['foto']; ?>" width="100px"></td>
                <td><a href="detail.php?id=<?= $dbr['id'];  ?>" class="btn btn-warning" role="button">detail</a></td>
              </tr>
              <?php $no++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      </div>
    </section>
    </section>
  </body>

  </html>