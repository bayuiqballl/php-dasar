<?php 
function salam($waktu, $nama){
	// $waktu = "Datang";
	// $nama  = "Bayu";
	return "Selamat $waktu, $nama!";
}
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan function</title>
 </head>
 <body>
 	<h1><?= salam('Pagi', 'bayu');  ?></h1>
 </body>
 </html>