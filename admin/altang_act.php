<?php 
include '../koneksi.php';
$altang  = $_POST['altang'];

mysqli_query($koneksi, "insert into alat_tangkap values (NULL,'$altang')");
header("location:altang.php");