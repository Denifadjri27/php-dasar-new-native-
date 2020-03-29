<?php 
	function salam($waktu, $nama) {
		return "Selamat $waktu, $nama";
	}

	function pacar($nama) {
		return "$nama";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>
	<h1><?= salam("Siang", "Deni"); ?></h1>
	<h2><?= pacar("Hai lagi apa kamu?"); ?></h2>
</body>
</html>