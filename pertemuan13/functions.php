<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "deni12345", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data){
	global $conn;

	  $judul = htmlspecialchars($data["judul"]);
    $aktor = htmlspecialchars($data["aktor"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $genre = htmlspecialchars($data["genre"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
      return false;
    }

    $tahun = htmlspecialchars($data["tahun"]);

      // query insert data
      mysqli_query($conn, "INSERT INTO film VALUES (null, '$judul', '$aktor', '$sutradara', '$genre', '$gambar', '$tahun')");

      return mysqli_affected_rows($conn);
}

function upload(){

      $namaFile = $_FILES['gambar']['name'];
      $ukuranFile = $_FILES['gambar']['size'];
      $error = $_FILES['gambar']['error'];
      $tmpName = $_FILES['gambar']['tmp_name'];

      // cek apakah tidak ada gambar yang diupload
      if( $error === 4 ) {
          echo "<script>
                  alert('pilih gambar terlebih dahulu!');
               </script>" ;
          return false;
      }

      // cek apakah yang diupload apakah gambar
      $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
      $ektensiGambar = explode('.', $namaFile);
      $ektensiGambar = strtolower(end($ektensiGambar));
      if( !in_array($ektensiGambar, $ekstensiGambarValid) ) {
         echo "<script>
                  alert('Maaf, yang anda upload bukan gambar!!!');
              </script>";
        return false;
      }

      // cek jika ukuran gambar terlalu besar
      if ( $ukuranFile > 1000000 ) {
           echo "<script>
                  alert('Maaf, ukuran gambar yang anda upload terlalu besar!!!');
              </script>";
        return false;
      }

      // lolos pengecekan, gambar siap di upload
      // generate nama gambar baru
      $namaFileBaru = uniqid();
      $namaFileBaru .= '.';
      $namaFileBaru .= $ektensiGambar;


      move_uploaded_file($tmpName, 'img/' .$namaFileBaru);

      return $namaFileBaru;
}

function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM film WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	
	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
    $aktor = htmlspecialchars($data["aktor"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $genre = htmlspecialchars($data["genre"]);
    // ambil data gambar
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
    $gambar = upload();
    }
    $tahun = htmlspecialchars($data["tahun"]);

      // query insert data
      $query = "UPDATE film SET 
      				judul = '$judul',
      				aktor = '$aktor',
      				sutradara = '$sutradara',
      				genre = '$genre',
      				gambar = '$gambar',
      				tahun = '$tahun'
      			WHERE id = $id 
      			";
      mysqli_query($conn, $query);

      return mysqli_affected_rows($conn);	
}

function cari($keyword) {
  $caridata = "SELECT * FROM film 
                WHERE 
            judul LIKE '%$keyword%' OR
            aktor LIKE '%$keyword%' OR
            sutradara LIKE '%$keyword%' OR
            genre LIKE '%$keyword%' OR 
            tahun LIKE '%$keyword%'
            ";

  return query($caridata);
}
?>