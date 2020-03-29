<?php 
// $_GET
$film = [[
			"judul" => "War II",
			"aktor" => "Dewi Persik",
			"sutradara" => "Wan Koder",
			"genre" => "perang",
			"gambar" => "logo1.png",
			"tahun" => "2013"
		],
		[
			"judul" => "Merah Jambu",
			"aktor" => "Reza Rahadian",
			"sutradara" => "Raditiya Dika",
			"genre" => "komedi",
			"gambar" => "logo2.png",
			"tahun" => "2014"
		],
		[
			"judul" => "Aqua Man",
			"aktor" => "Jon Draw",
			"sutradara" => "Mike Luwis",
			"genre" => "Animasi",
			"gambar" => "logo3.png",
			"tahun" => "2015"
		]
	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET</title>
</head>
<body>
	<h1>Daftar film</h1>
	<ul>
	<?php foreach ($film as $fm) : ?>
		<li>
			<a href="latihan2.php?judul=<?= $fm["judul"]; ?>&aktor=<?= $fm["aktor"]; ?>&sutradara=<?= $fm["sutradara"]; ?>&genre=<?= $fm["genre"]; ?>&tahun=<?= $fm["tahun"]; ?>&gambar=<?= $fm["gambar"]; ?>"><?= $fm["judul"]; ?></a>	
		</li>
	<?php endforeach; ?>
	</ul>
</body>
</html>