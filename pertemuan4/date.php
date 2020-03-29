<?php 
	// // date untuk menampilkan tanggal dengan format tertentu
	// echo date("l, d-m-Y");

	// time
	// UNIX Timestamp
	// Detik yang sudah berlalu sejak 1 januari 1970
	// echo time();
	// menghitung waktu lalu dan depan
	// echo date("d M Y", time()-60*60*24*100);

	// mktime
	// membuat sendiri detik
	// mktime(0,0,0,0,0,0)
	// jam,menit,detik,bulan,tanggal,tahun
	// echo date("l", mktime(0,0,0,10,14,1995));

	// strtotime
	// echo date("l", strtotime("14 okt 1995"));

	// menghitung 7 hari kedepan
	// echo date("d M Y", time()+60*60*24*7);
	
?>