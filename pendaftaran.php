<!DOCTYPE html>
<html>
<head>
</head><title>halaman admin</title>
<body>
	<?php
	session_start();
	if ($_SESSION['level']==""){
		header("location:index.php");
	}
?>
<h1>Selamat Datang <?php echo $_SESSION['nama'];?>!</h1>
<h1>Anda login sebagai <?php echo $_SESSION['level'];?></h1>
<form action="pendaftar.php" method="post">
	<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Tanggal lahir</td>
		<td><input type="date" name="tgl_lahir"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
</body>
</html>