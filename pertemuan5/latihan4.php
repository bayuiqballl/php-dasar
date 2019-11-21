<?php 
// array multi dimension
$mahasiswa = [
	["Bayu Muh iqbal","1301184241","S1 Informatiika","bayuiqball13@gmail.com",],

	["Rahmat Darmawan", "20100812","Pelatih Timnas", "doddy@gmail.com"],

	["Reihan", "11213414","Leader Company", "1131y@gmail.com"]




];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 4</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>
	

	<?php foreach($mahasiswa as $mhs) : ?>
	<ul>
		<li>Nama : <?= $mhs[0];  ?></li>
		<li>NIM : <?= $mhs[1];  ?></li>
		<li>Jurusan : <?= $mhs[2];  ?></li>
		<li>EMAIL : <?= $mhs[3];  ?></li>
	</ul>
	<?php endforeach; ?>
</body>
</html>