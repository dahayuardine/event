<?php
session_start();
include 'config.php';

$username =$_POST['username'];
$password =$_POST['password'];

$login = mysqli_query($koneksi, "select * from user where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
}
	if($data['level']=="user"){
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "user";
		header("location:pendaftaran.php");

	}else if ($data['level']=="admin"){
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "admin";
		header("location:admin/halaman_admin.php");
	}else{
		header("location:index.php");
	}
?>