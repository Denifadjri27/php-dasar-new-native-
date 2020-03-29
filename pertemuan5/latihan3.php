<?php 
$mahasiswa = [
	["Deni Fadjri", "H1101141027", "Sistem Informasi", "denifadjri@gmail.com"],
	["Radika", "H13232427", "Hukum", "radika@gmail.com"],
	["Ramli", "H43332427", "Fisip", "ramli@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahsiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		<li>Nama :<?= $mhs[0]; ?></li>
		<li>NIM :<?= $mhs[1]; ?></li>
		<li>Jurusan :<?= $mhs[2]; ?></li>
		<li>Email :<?= $mhs[3]; ?></li>
	</ul>
	<?php endforeach; ?>
</body>
</html>