<?php 
include '../koneksi.php';
$kabkot = $_POST['kabkot'];

mysqli_query($koneksi, "insert into kabupaten_kota values (NULL,'$kabkot')");
header("location:kabkot.php");