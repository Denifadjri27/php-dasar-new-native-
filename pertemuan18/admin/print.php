<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$film = query("SELECT * FROM film ORDER BY ID DESC");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
</head>
<body>
   <h1>Daftar Film</h1>
   <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Aktor</th>
            <th>Genre</th>
            <th>Sutradara</th>
            <th>Tahun</th>
        </tr>';

     $i = 1;
     foreach( $film as $row ) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="img/'. $row["gambar"] .'" width="50"></td>
            <td>'. $row["judul"] .'</td>
            <td>'. $row["aktor"] .'</td>
            <td>'. $row["genre"] .'</td>
            <td>'. $row["sutradara"] .'</td>
            <td>'. $row["tahun"] .'</td>
        </tr>';
     }   

$html .= '</table>    
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-film.pdf', 'I');

?>