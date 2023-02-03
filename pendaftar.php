<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>data pendaftaran</title>
	</head>
	<body>
	<h1>Data Pendaftaran</h1>
	<h3><a href="index.php">Kembali</a></h3>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
		</tr>
	<?php
	include 'config.php';
	$no = 1;
	$data = mysqli_query($koneksi, "select * from daftar");
	while ($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><?php echo $d['tgl_lahir']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
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