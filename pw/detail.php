<?php
require 'function.php';
$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>My Store</title>
</head>

<body>
  <!-- Navbar content -->
  <nav class="navbar navbar-dark bg-primary p-2">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">My Novel</span>
    </div>
  </nav>
  <!-- akhir navbar -->
  <section class="p-4">
    <div class="container">
      <div class="title text-center p-2">
        <h1>Keterangan</h1>
      </div>

      <div class="row justify-content-center">
        <div class="card  pt-3" style="width: 29rem;">
          <img src="../asset/<?= $buku["gambar"]; ?>" alt="" height=646px class="card-img-top">
          <div class="card-body">
            <div class="row">
              <h5 class="card-title col-md-4">Judul Buku</h5>
              <h5 class="col-md-1">:</h5>
              <p class="card-text col-md-7"><?= $buku["judul"]; ?></p>
            </div>

            <div class="row">
              <h5 class="card-title col-md-4">Penulis</h5>
              <h5 class="col-md-1">:</h5>
              <p class="card-text col-md-7"><?= $buku["penulis"]; ?></p>
            </div>

            <div class="row">
              <h5 class="card-title col-md-4">Tahun Terbit</h5>
              <h5 class="col-md-1">:</h5>
              <p class="card-text col-md-7"><?= $buku["tahun_terbit"]; ?></p>
            </div>

            <div class="text-center pt-3">
              <a href="../index.php" class="btn btn-danger col-sm-3">Kembali</a>
              <a href="ubah.php" class="btn btn-primary col-sm-3">Update</a>
              <a href="hapus.php" class="btn btn-primary col-sm-3">Delete</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <br>



  <!-- footer -->
  <footer class="bg-dark fixed-bottom text-white">
    <div class="container">
      <div class="row">
        <div class="col p-1 text-center">
          <small>Copyright &copy; 2022 - Bahrul Ulum.</small>

        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->

</body>


</html>