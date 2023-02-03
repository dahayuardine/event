<?php
session_start();

//menghapus semua session
session_destroy();

//mengalihkan kehalaman login
header("location:daftar.php");
?>
