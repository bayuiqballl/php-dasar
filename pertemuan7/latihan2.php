<?php  
//  cek tidak ada $_GET
if (!isset($_GET["nama"])  || 
	!isset($_GET["nim"])   ||
	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"])  

){
	# redirect location
	header("Location: latihan1.php");
	exit;

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>


<ul>
	<li><?= $_GET['nama'];  ?></li>
	<li><?= $_GET['nim'];  ?></li>
	<li><?= $_GET['email'];  ?></li>
	<li><?= $_GET['jurusan'];  ?></li>
</ul>


<a href="latihan1.php">kembali ke halaman pertama</a>

</body>
</html>