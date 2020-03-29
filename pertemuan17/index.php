<?php 
session_start();

if( !isset($_SESSION["masuk"]) ) {
  header("Location: masuk.php");
  exit;
}

require 'functions.php';

$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM film"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$film = query("SELECT * FROM film ORDER BY ID DESC LIMIT $awalData, $jumlahDataPerHalaman");


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

    <title>Dahsboard</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="container">
      <nav class="navbar navbar-light bg-secondary fixed-top">
        <a class="navbar-brand text-white">
          <img src="logo/kubahmasjid.svg" width="50" height="50" 
          class="d-inline-block" alt="">
          MASJID SIRAJUL IMAN
        </a>
      </nav>
    </div>
    <!-- endnavbar -->

    <!-- navs -->
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-secondary pt-5">
        <ul class="nav flex-column ml-3 mb-3">
          <li class="nav-item">
            <a class="nav-link active text-white">Selamat datang, <?=$_SESSION['username'];?> </a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php"><i class="fas fa-tachometer-alt"></i> Daftar Film</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Daftar Pemain Liverpool</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php">Logout</a>
            <hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
        <h3>Daftar film</h3><hr>
        <a class="btn btn-success pt-2 " href="tambah.php" role="button"><i class="fas fa-pen-square"></i> Tambah data</a>
        <a class="btn btn-primary pt-2 " href="print.php" role="button" target="_blank"><i class="fas fa-print"></i> Cetak</a>
        <br><br>
        <form action="" method="post" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="keyword" size="30" placeholder="Cari data film" aria-label="Search" autofocus autocomplete="off">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
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
                <?php $i = $awalData + 1; ?>
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

              <!-- pagination -->
              <?php if( $halamanAktif > 1 ) : ?>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" 
                    aria-label="Previous">
                   <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
              </ul>
              <?php endif; ?>

            <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if( $i == $halamanAktif ) : ?>
                <ul class="pagination">
                  <li class="page-item active"><a class="page-link" 
                    href="?halaman=<?= $i; ?>"><?= $i ?></a>
                  </li>
                </ul>
                <?php else : ?>
                  <ul class="pagination">
                  <li class="page-item"><a class="page-link" 
                    href="?halaman=<?= $i; ?>"><?= $i ?></a>
                  </li>
                </ul>
                <?php endif; ?>
            <?php endfor; ?>

              <?php if( $halamanAktif < $jumlahHalaman ) : ?>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
              <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- endnavs -->
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
</html>