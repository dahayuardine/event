<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>menampilkan data acara</title>
	</head>
	<body>
	<h1>Data Acara</h1>
	<h3><a href="halaman_admin.php">Kembali</a></h3>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Acara</th>
			<th>Tanggal Acara</th>
			<th>Tempat Acara</th>
			<th>Informasi</th>
			<th>Opsi</th>
		</tr>
	<?php
	include '../config.php';
	$no = 1;
	$data = mysqli_query($koneksi, "select * from acara");
	while ($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_acara']; ?></td>
			<td><?php echo $d['tgl_acara']; ?></td>
			<td><?php echo $d['tempat_acara']; ?></td>
			<td><?php echo $d['Informasi']; ?></td>
			<td>
				<a href="edit.php">Edit</a>
				<a href="hapus.php">Hapus</a>
			</td>
		</tr>
		<?php
	}
	?>
	</table>
	</body>
	</html>