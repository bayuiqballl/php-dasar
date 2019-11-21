<?php 
$toko = [
		[
			"merk" => "ROWN",
			"model" => "kemeja",
			"ukuran" => "XL",
			"warna" => "hijau"
		],
		[

			"merk" => "adiddas",
			"model" => "kaos",
			"ukuran" => "L",
			"warna" => "putih"
		]




];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Toko Baju</title>
 </head>
 <body>
 	<h1>Data Toko Baju</h1>

 	<?php foreach( $toko as $t) : ?>
 		<ul>
 			<li>Merk :  <?= $t["merk"];  ?></li>
 			<li>Model :  <?= $t["model"];  ?></li>
 			<li>Ukuran : <?= $t["ukuran"]; ?></li>
 			<li>Warna  : <?= $t["warna"]; ?></li>
 		</ul>
 	<?php endforeach; ?>

 </body>
 </html>