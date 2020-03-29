<?php 
require 'functions.php';
$film = query("SELECT * FROM film ORDER BY id DESC");

// jika nanti tombol cari di click
if ( isset($_POST["cari"]) ) {
  $film = cari($_POST["keyword"]);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Dahsboard The Kopites</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="container">
      <nav class="navbar navbar-light fixed-top" style="background-color: #B22222;">
        <a class="navbar-brand text-white">The Kopites</a>

      </nav>
    </div>
    <!-- endnavbar -->

    <!-- navs -->
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark pt-4">
        <ul class="nav flex-column ml-3 mb-3">
          <li class="nav-item active">
            <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Daftar Film</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Daftar Pemain Liverpool</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Daftar</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Login</a>
            <hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-4 pt-2">
        <h3>Daftar film</h3><hr>

        <a class="btn btn-primary pt-2 " href="tambah.php" role="button">Tambah data film</a><br><br>

        <form action="" method="post" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="keyword" size="30" placeholder="Cari data film" aria-label="Search" autofocus autocomplete="off">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari">Cari</button>
        </form><br>
        <div class="row">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Aksi</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Aktor</th>
                  <th scope="col">Genre</th>
                  <th scope="col">Sutradara</th>
                  <th scope="col">Tahun</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($film as $row) : ?>
                  <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td>
                      <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                      <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('anda yakin hapus?');">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="40"></td>
                    <td><?= $row["judul"]; ?></td>
                    <td><?= $row["aktor"]; ?></td>
                    <td><?= $row["genre"]; ?></td>
                    <td><?= $row["sutradara"]; ?></td>
                    <td><?= $row["tahun"]; ?></td>
                  </tr>
                <?php $i++; ?>
               <?php endforeach; ?>
              </tbody>
            </table>
        </div>
      </div>
    </div>
    <!-- endnavs -->
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>