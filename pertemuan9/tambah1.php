<?php 
// koneksi ke DBMS
 $conn = mysqli_connect("localhost","root","","phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	// ambil data dari tiap elemen dalam form
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jurusan = $_POST['jurusan'];
	$gambar = $_POST['gambar']; 

	// query insert data
	$query = "INSERT INTO mahasiswa VALUES ('','$nim','$nama','$email','$jurusan','$gambar')";
	mysqli_query($conn, $query);

	// cek apakah data berhasil atau tidak
	if (mysqli_affected_rows($conn) > 0) {
		echo "Berhasil";
	}else{
		echo "gagal!";
		echo "<br>";
		echo mysqli_error($conn);
	}
	
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah data mahasiswa</title>
 </head>
 <body>
 	<h1>Tambah data mahasiswa</h1>	

 	<form action="" method="post">
 		<ul>
 			<li>
 				<label for="nim">NIM :</label>
 				<input type="text" name="nim" id="nim">
 			</li>
 			<li>
 				<label for="nama">Nama :</label>
 				<input type="text" name="nama" id="nama">
 			</li>
 			<li>
 				<label for="email">Email :</label>
 				<input type="text" name="email" id="email">
 			</li>
 			<li>
 				<label for="jurusan">Jurusan :</label>
 				<input type="text" name="jurusan" id="jurusan">
 			</li>
 			<li>
 				<label for="gambar">Gambar :</label>
 				<input type="text" name="gambar" id="gambar">
 			</li>
 			<li>
 				<button type="submit" name="submit">Tambah Data!</button>
 			</li>
 		</ul>
 	</form>

 </body>
 </html>