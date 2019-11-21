<?php 
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
	[
		"nama" => "Bayu Muhammad Iqbal",
		"nim" => "1301184241",
		"email" => "bayuiqballl13@gmail.com",
		"jurusan" => "S1 Informatika",
		"gambar" => "1.jpg"
	],
	
	[
		"nama" => "Hikam Abqory",
		"nim" => "1315352352",
		"email" => "hikam123@gmail.com",
		"jurusan" => "S1 RPL",
		"gambar" => "2.jpg"
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>
	<ul>
		<li>
			<img src="img/<?= $mhs["gambar"]; ?> " >
		</li>
		<li>Nama    : <?= $mhs["nama"];  ?></li>
		<li>NIM     : <?= $mhs["nim"];  ?></li>
		<li>Email   : <?= $mhs["email"];  ?></li>
		<li>Jurusan : <?= $mhs["jurusan"];  ?></li>
		 
	</ul>

<?php endforeach; ?>




</body>
</html>
