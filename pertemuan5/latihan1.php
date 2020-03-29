<?php 
// array
// variabel yang dapat memiliki banyak nilai 
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antar key dan value 
// key nya adalah index

// membuat array 
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// array cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// // menampilkan array
// // var_dump() / print_r()
// var_dump ($hari);
// echo "<br>";
// print_r($bulan);

// // menampilkan 1 element pada array
// echo $bulan[1];

// menambahkan elemen baru pada array 
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>