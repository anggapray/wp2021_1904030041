<?php

require 'koneksi.php';
$datbar = query("SELECT * FROM komentar");
if (isset($_POST['tambah'])) {
  if (komen($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'komen.php';
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
  <link rel="stylesheet" type="text/css" href="stylehome.css">
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
            <a class="nav-link" href="#">Komentar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--akhir navbar-->
  <!--komentar-->
  <section id="komen">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2><b>Kritik Dan Saran</b></h2>
          <hr>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <form method="POST" action="">
            <div class="mb-3">
              <label for="email" class="form-label"><b> email address</b></label>
              <input type="text" class="form-control" id="email" placeholder="name@example.com" name="email">
            </div>
            <div class="mb-3">
              <label for="komen" class="form-label"><b>Tulis komentar</b></label>
              <textarea class="form-control" id="komen" rows="3" placeholder="Tulis Komentar" name="komentar"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah"><b>Simpan</b></button>
          </form>
        </div>
      </div>
    </div>
    <br>
  </section>
  <!-- preview komen -->
  <div class="prev-comments">
    <?php

    $sql = "SELECT * FROM komentar";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

    ?>
        <div class="single-item">
          <table border="1" width="650px" align="center" cellpadding="5">
            <tr>
              <td bgcolor="white">
                <h6><b><?php echo $row['email']; ?></b></h6>
                <p>"<b> <?php echo $row['komentar']; ?></b>"</p>
              </td>
            </tr>
          </table>
        </div>
    <?php

      }
    }
    ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0099ff" fill-opacity="1" d="M0,0L30,5.3C60,11,120,21,180,64C240,107,300,181,360,186.7C420,192,480,128,540,122.7C600,117,660,171,720,170.7C780,171,840,117,900,117.3C960,117,1020,171,1080,202.7C1140,235,1200,245,1260,234.7C1320,224,1380,192,1410,176L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
  </div>

</body>

</html>