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
  <nav class="navbar navbar-dark bg-primary p-1">
    <!-- Navbar content -->
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Daftar Buku Novel</span>
    </div>
  </nav>

  <!--Table content-->
  <table class="table table-bordered border-primary">
    <tr class="table-dark">
      <th>No.</th>
      <th>Gambar</th>
      <th>Judul Buku</th>
      <th>Penulis</th>
      <th>Tahun terbit</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($buku as $bk) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="asset/<?= $bk["gambar"]; ?>" width="100px"></td>
        <td><?= $bk["judul"]; ?></td>
        <td><?= $bk["penulis"]; ?></td>
        <td><?= $bk["tahun_terbit"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>


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