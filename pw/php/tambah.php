<?php
require 'function.php';
$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];


require 'function.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = '../index.php';
            </script>";
  } else {
    echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = '../index.php';
            </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>My Store</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fs-md-5 fw-bold" href="#">My Novel</a>
    </div>
  </nav>
  <div class="container" class="ubah">
    <br>

    <h3>Tambah Data Barang</h3>
    <form action="" method="post">
      <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">

      <div class="mb-4">
        <label for="Gambar" class="form-label">Gambar</label>
        <input type="text" class="form-control" id="Gambar" aria-describedby="Gambar" name="Gambar" required value="<?= $buku['gambar']; ?>">
      </div>

      <div class="mb-4">
        <label for="judul buku" class="form-label">judul Buku</label><br>
        <input type="text" class="form-control" name="judul buku" id="judul buku" aria-describedby="judul buku" required value="<?= $buku['judul']; ?>">
      </div>

      <div class="mb-4">
        <label for="Penulis" class="form-label">Penulis</label><br>
        <input type="text" class="form-control" name="Penulis" id="Penulis" aria-describedby="Penulis" required value="<?= $buku['penulis']; ?>">
      </div>

      <div class="mb-4">
        <label for="Tahun Terbit" class="form-label">Tahun Terbit</label><br>
        <input type="text" class="form-control" name="Tahun Terbit" id="Tahun Terbit" aria-describedby="Tahun Terbit" required value="<?= $buku['tahun_terbit']; ?>">
      </div>

      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
      </ul>
    </form>

  </div>

  <!-- footer -->
  <footer class="bg-dark fixed-bottom text-white">
    <div class="container">
      <div class="row">
        <div class="col p-3 text-center">
          <small>Copyright &copy; 2020 - Bahrul Ulum.</small>

        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->


  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>