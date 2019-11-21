<?php 
// Variable Scope / linkup variable
// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
// $_GET;
$mahasiswa = [
	[
		"nama" => "Bayu Muhammad Iqbal",
		"nim" => "1301184241",
		"email" => "bayuiqballl13@gmail.com",
		"jurusan" => "S1 Informatika"
		// "gambar" => "1.jpg"
	],
	
	[
		"nama" => "Hikam Abqory",
		"nim" => "1315352352",
		"email" => "hikam123@gmail.com",
		"jurusan" => "S1 RPL"
		// "gambar" => "2.jpg"
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<ul>
<?php foreach($mahasiswa as $mhs) : ?>
		<li>		
			<a href="latihan2.php?nama=<?= $mhs["nama"];  ?>&nim=<?= $mhs["nim"];  ?>&email=<?= $mhs["email"];  ?>&jurusan=<?= $mhs["jurusan"];  ?>"><?= $mhs['nama'];  ?></a>

		</li>
<?php endforeach; ?>
	</ul>

</body>
</html>