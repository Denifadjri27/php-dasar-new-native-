<?php 
session_start();

if( isset($_SESSION["masuk"]) ) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

  if( isset($_POST["masuk"]) ) {

      $username = $_POST["username"];
      $password = $_POST["password"];

      // cek apakah username ada atau belom
      $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

      // cek username
      if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
          // set session
          $_SESSION["masuk"] = true;
          $_SESSION["username"] = $row["username"];

          header("location: index.php");
          exit;
        }
      }

      $error = true;
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

    <title>Halaman masuk</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-4">&nbsp;</div>
      <div class="col-md-4 p-5">
         <div class="outter-form-login">
            <form action="" class="inner-login" method="post">
            <h3 class="text-center title-login">Halaman Masuk</h3>
            <?php if( isset($error)) : ?>
              <div class="alert alert-danger" role="alert">
                Username atau password salah!!!! 
              </div>
            <?php endif; ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <button type="submit" name="masuk" class="btn btn-block btn-success">Masuk</button>
                <div class="text-center forget">
                    <p>Daftar disini <a href="daftar.php">Daftar?</a></p>
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