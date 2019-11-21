<?php 
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah Data</a>
	<br><br>
	
	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach( $mahasiswa as $row) : ?>		
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">ubah</a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="50" > </td>
			<td><?= $row["nim"];  ?></td>
			<td><?= $row["nama"]  ?></td>
			<td><?= $row["email"];  ?></td>
			<td><?= $row["jurusan"];  ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>
</html>