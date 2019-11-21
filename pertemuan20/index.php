<?php
session_start();


if (!isset($_SESSION["login"]) ) {
	echo "<script> 
	document.location.href = 'login.php';
					</script>";
	exit;
}


require "functions.php";

// pagination
// konfigurasi
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = ( isset($_GET['halaman']) ) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");

// tombol cari ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<style>
		@media print {
			.logout, .tambah , .form-cari, .aksi {
				
					display: none;
				}
			}
		
	</style>
</head>
<body>

	<a href="logout.php" class="logout">Log out</a>	

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php" class="tambah">Tambah Data</a>
	<br><br>

	<form action="" method="post" class="form-cari">
		
		<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Cari</button>

	</form>
	<br><br>

	<!-- Navigasi -->
	<?php if( $halamanAktif > 1) : ?>
		<a href="?halaman=<?= $halamanAktif - 1;  ?>">&laquo;</a>
	<?php endif; ?>

	<?php for( $i= 1; $i <= $jumlahHalaman; $i++) : ?>
		<?php if( $i == $halamanAktif ) : ?>
			<a href="?halaman=<?= $i;  ?>" style="font-weight: bold;; color: red;"><?= $i; ?></a>
		<?php else : ?> 
			<a href="?halaman=<?= $i;  ?>"><?= $i; ?></a>
		<?php endif; ?>
	<?php endfor; ?>

	<?php if( $halamanAktif < $jumlahHalaman) : ?>
		<a href="?halaman=<?= $halamanAktif + 1;  ?>">&raquo;</a>
	<?php endif; ?>

	<br>
	<div id="container">
	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th class="aksi">Aksi</th>
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
			<td class="aksi">
				<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
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
</div>

<script src="js/script.js" type="text/javascript"></script>
</body>
</html>