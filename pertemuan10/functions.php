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
    $gambar = htmlspecialchars($data["gambar"]);
    $tahun = htmlspecialchars($data["tahun"]);

      // query insert data
      mysqli_query($conn, "INSERT INTO film VALUES (null, '$judul', '$aktor', '$sutradara', '$genre', '$gambar', '$tahun')");

      return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM film WHERE id = $id");

	return mysqli_affected_rows($conn);
}
?>