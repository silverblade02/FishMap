<?php 
include '../koneksi.php';
$kategori  = $_POST['ikan'];

mysqli_query($koneksi, "insert into ikan values (NULL,'$kategori')");
header("location:kategori.php");