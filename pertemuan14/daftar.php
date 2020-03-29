<?php 
require 'functions.php';
// cek tombol daftar sudah di tekan atau belum
if( isset($_POST["daftar"]) ) {

    if( daftar($_POST) > 0 ) {
      echo "<script>
              alert('User baru berhasil ditambahkan!!!');
            </script>";
    } else {
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

    <title>Halaman daftar</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-4">&nbsp;</div>
      <div class="col-md-4 p-5">
         <div class="outter-form-login">
            <form action="" class="inner-login" method="post">
            <h3 class="text-center title-login">Halaman Daftar</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password2" placeholder="Konfirmasi password">
                </div>

                <button type="submit" name="daftar" class="btn btn-block btn-success">Daftar</button>
                <div class="text-center forget">
                    <!-- <p>Back To <a href="./login.php">Login</a></p> -->
                </div>
            </form>
        </div>
      </div>
      <div class="col-md-4">&nbsp;</div>
    </div>
   
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>