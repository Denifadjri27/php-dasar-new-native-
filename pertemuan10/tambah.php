<?php 
require 'functions.php';
// cek apakah tombol sumbit sudah ditekan atau belom
if (isset($_POST["submit"])) {

      // cek apakah data berhasil ditambahkan atau tidak
      if ( tambah($_POST) > 0 ) {
        echo "<script>
                  alert('data berhasil ditambahkan');
                  document.location.href = 'index.php';  
              </script>";
      } else {
        echo "data gagal";

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

    <title>Tambah data film</title>
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
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Logout</a>
            <hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-4 p-4 pt-2">
        <h3>Tambah data film</h3><hr>

        <form action="" method="post">
            
            <div class="form-group">
              <label for="judul">Judul :</label>
              <input type="text" name="judul" class="form-control" id="judul" required>
            </div>
            <div class="form-group">
              <label for="aktor">Aktor :</label>
              <input type="text" name="aktor" class="form-control" id="aktor" required>
            </div>
            <div class="form-group">
              <label for="sutradara">Sutradara :</label>
              <input type="text" name="sutradara" class="form-control" id="sutradara" required>
            </div>
            <div class="form-group">
              <label for="genre">Genre :</label>
              <input type="text" name="genre" class="form-control" id="genre" required>
            </div>
            <div class="form-group">
              <label for="gambar">Gambar :</label>
              <input type="text" name="gambar" class="form-control" id="gambar" required>
            </div>
            <div class="form-group">
              <label for="tahun">Tahun :</label>
              <input type="text" name="tahun" class="form-control" id="tahun" required>
            </div>
          <button type="submit" name="submit" class="btn btn-primary">Tambah data</button>
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