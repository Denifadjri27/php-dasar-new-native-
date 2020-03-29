<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "deni12345", "phpdasar");

// ambil data dari tabel film / query data film
$result = mysqli_query($conn, "SELECT * FROM film");

// ambil data fetch film dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // 
// $film = mysqli_fetch_assoc($result);
// var_dump($film["aktor"]);

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
          <li class="nav-item">
            <a class="nav-link active text-white" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Daftar Film</a>
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
      <div class="col-md-10 p-4 pt-2">
        <h3>Daftar film</h3><hr>
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
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td>
                      <a href="">Ubah</a> |
                      <a href="">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="40"></td>
                    <td><?= $row["judul"]; ?></td>
                    <td><?= $row["aktor"]; ?></td>
                    <td><?= $row["genre"]; ?></td>
                    <td><?= $row["sutradara"]; ?></td>
                    <td><?= $row["tahun"]; ?></td>
                  </tr>
                <?php $i++; ?>
               <?php endwhile; ?>
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