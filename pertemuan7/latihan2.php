<?php 
// cek apakah data $_GET sudah di buat atau belom
if ( !isset($_GET["judul"]) || 
	 !isset($_GET["aktor"]) ||
	 !isset($_GET["sutradara"]) ||
	 !isset($_GET["genre"]) ||
	 !isset($_GET["tahun"]) ||
	 !isset($_GET["gambar"])) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail film</title>
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
		<li><?= $_GET["judul"]; ?></li>
		<li><?= $_GET["aktor"]; ?></li>
		<li><?= $_GET["sutradara"]; ?></li>
		<li><?= $_GET["genre"]; ?></li>
		<li><?= $_GET["tahun"]; ?></li>
	</ul>

	<a href="latihan1.php">Kembali halaman utama film</a>
</body>
</html>