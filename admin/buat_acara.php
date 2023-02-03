<?php
include '.../config.php';
$nama = $_POST['nama_acara'];
$tgl = $_POST['tgl_acara'];
$tempat = $_POST['tempat_acara'];
$info = $_POST['informasi'];
$hasil=mysqli_query($koneksi,"INSERT INTO acara VALUES('','$nama','$tgl','$tempat','$info')");
header("location:tampil_acara.php?pesan=input");
?>