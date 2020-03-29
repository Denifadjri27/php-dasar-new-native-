<?php 
	// $mahasiswa = [
	// 	["Deni Fadjri", "H1101141027", "Sistem Informasi", "deni@gmail.com"],
	// 	["Roni Kasuwan", "B3324027", "Akuntansi", "suan@gmail.com"],
	// 	["Andi Krisfiyan", "A53505353", "Manajemen Informatika", "andi@gmail.com"],
	// 	["Irvansyah", "P53433553", "Pendidikan Ekonomi", "irvan@gmail.com"],
	// ];

	// array associative 
	// definisinya sama seperti array, kecuali
	// key-nya adalah string yang kita buat sendiri
	$film = [[
			"judul" => "War II",
			"aktor" => "Dewi Persik",
			"sutradara" => "Wan Koder",
			"genre" => "perang",
			"gambar" => "logo1.png"
		],
		[
			"judul" => "Merah Jambu",
			"aktor" => "Reza Rahadian",
			"sutradara" => "Raditiya Dika",
			"genre" => "komedi",
			"gambar" => "logo2.png"
		],
		[
			"judul" => "Aqua Man",
			"aktor" => "Jon Draw",
			"sutradara" => "Mike Luwis",
			"genre" => "Animasi",
			"gambar" => "logo3.png"
		]
	];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Film</title>
</head>
<body>
	<h1>Daftar Film</h1>

		<?php foreach ($film as $fm) : ?>
			<ul>
				<li>
					<img src="img/<?= $fm["gambar"]; ?>">
				</li>
				<li>Nama : <?= $fm["judul"]; ?></li>
				<li>Harga : <?= $fm["aktor"]; ?></li>
				<li>Tahun : <?= $fm["sutradara"]; ?></li>
				<li>Genre : <?= $fm["genre"]; ?></li>
			</ul>
		<?php endforeach; ?>
</body>
</html>