<?php 
	$mahasiswa = ["Bayu Muhammad Iqbal", "1301184241", "S1 Informatika", "bayuiqballl13@gmail.com"];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>

 	<h1>Daftar Mahasiswa</h1>

 	<ul>
 		<?php foreach($mahasiswa as $mhs) : ?>
 			<li><?= $mhs;  ?></li>
 		<?php endforeach; ?>
 	</ul>
 
 </body>
 </html>