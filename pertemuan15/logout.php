<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo "<script> 
	document.location.href = 'login.php';
					</script>";
exit;


 ?>