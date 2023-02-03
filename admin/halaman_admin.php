<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>halaman admin</title>
	</head>
	<body>
	<?php
	session_start();
	if ($_SESSION['level']==""){
		header("location:index.php");
	}
?>
<h1>Selamat Datang <?php echo $_SESSION['nama'];?>!</h1>
<h1>Anda login sebagai <?php echo $_SESSION['level'];?></h1>
<h3>Anda dapat: </h3>
<a href = "pendaftar.php">-Lihat Pendaftar</a><br>
<a href = "acara.php">-Buat Acara</a>
	</body>
	</html>