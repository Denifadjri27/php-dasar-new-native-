<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POST</title>
</head>
<body>
	<?php if( isset($_POST["submit"]) ) : ?>
	<h1>Halo Selamat Datang <?= $_POST["judul"]; ?></h1>
	<?php endif; ?>
	<form action="" method="post">
		Masukan judul:
		<input type="text" name="judul">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>

</body>
</html>