<DOCTYPE html>
<html>
<head>
</head><title>beranda</title>
<body>
	<?php
	session_start();
	if ($_SESSION['level']==""){
		header("location:index.php");
	}
?>
<h1 align="center">Informasi Event Festival Art 2023</h1>
	<table border="1" align="center">
		<tr>
			<th>No</th>
			<th>Nama Acara</th>
			<th>Tanggal Acara</th>
			<th>Tempat Acara</th>
			<th>Informasi</th>
		</tr>
	<?php
	include 'config.php';
	$no = 1;
	$data = mysqli_query($koneksi, "select * from acara");
	while ($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_acara']; ?></td>
			<td><?php echo $d['tgl_acara']; ?></td>
			<td><?php echo $d['tempat_acara']; ?></td>
			<td><?php echo $d['informasi']; ?></td>
		</tr>
		<?php
	}
	?>
	</table>
	<br>
<a href="login.php">Masuk</a>
</body>
</html>