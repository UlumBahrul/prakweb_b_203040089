<?php
require 'php/function.php';

$buku = query("SELECT * FROM buku")
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="php/style.css">
  <title>My Store</title>
</head>

<body>
  <!-- Navbar content -->
  <nav class="navbar navbar-dark bg-primary p-2">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">My Novel</span>
      <a class="btn btn-sm btn-outline-secondary btn-light" href="php/tambah.php">Tambah</a>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!--Table content-->
  <section id="content" class="content p-4">

    <div class="container">

      <div class="title text-center pt-2">
        <h1>Daftar buku</h1>
      </div>

      <div class="row justify-content-center">
        <?php
        $nomer = 1;
        foreach ($buku as $bk) :
        ?>

          <div class="card col-12 col-md-3 pt-3 " style="width: 18rem; padding:20px; margin:21px;">
            <center><img src="asset/<?= $bk["gambar"]; ?>" alt="" width=250px; height=350px></center>
            <div class="card-body">
              <h5 class="card-title"><?= $bk["judul"] ?></h5>

            </div>
            <a href="php/detail.php?id=<?= $bk['id'] ?>" class="btn btn-primary card-text">Detail </a>

          </div>

        <?php endforeach; ?>

      </div>

    </div>
  </section>
  <!--akhir content-->

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