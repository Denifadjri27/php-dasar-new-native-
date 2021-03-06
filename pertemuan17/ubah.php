<?php 
session_start();

if( isset($_SESSION["masuk"]) ) {
  header("Location: masuk.php");
  exit;
}

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$film = query("SELECT * FROM film WHERE id = $id")[0];

// cek apakah tombol sumbit sudah ditekan atau belom
if (isset($_POST["submit"])) {

      // cek apakah data berhasil diubah atau tidak
      if ( ubah($_POST) > 0 ) {
        echo "<script>
                  alert('data berhasil diubah!');
                  document.location.href = 'index.php';  
              </script>";
      } else {
        echo "data gagal diubah";

        echo mysqli_error($conn);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ubah data film</title>
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
          <li class="nav-item">
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
        </ul>
      </div>
      <div class="col-md-4 p-4 pt-2">
        <h3>Ubah data film</h3><hr>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $film["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $film["gambar"]; ?>">
            <div class="form-group">
              <label for="judul">Judul :</label>
              <input type="text" name="judul" class="form-control" id="judul" required value="<?= $film["judul"]; ?>">
            </div>
            <div class="form-group">
              <label for="aktor">Aktor :</label>
              <input type="text" name="aktor" class="form-control" id="aktor" required value="<?= $film["aktor"]; ?>">
            </div>
            <div class="form-group">
              <label for="sutradara">Sutradara :</label>
              <input type="text" name="sutradara" class="form-control" id="sutradara" required value="<?= $film["sutradara"]; ?>">
            </div>
            <div class="form-group">
              <label for="genre">Genre :</label>
              <input type="text" name="genre" class="form-control" id="genre" required value="<?= $film["genre"]; ?>">
            </div>
            <div class="form-group">
              <label for="gambar">Gambar :</label><br>
              <img src="img/<?= $film["gambar"]; ?>" width="80">
              <input type="file" name="gambar" class="form-control" id="gambar">
            </div>
            <div class="form-group">
              <label for="tahun">Tahun :</label>
              <input type="text" name="tahun" class="form-control" id="tahun" required value="<?= $film["tahun"]; ?>">
            </div>
          <button type="submit" name="submit" class="btn btn-primary">Ubah data</button>
        </form>
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