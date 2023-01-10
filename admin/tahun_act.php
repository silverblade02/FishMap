<?php 
include '../koneksi.php';
$tahun = $_POST['tahun'];

mysqli_query($koneksi, "insert into tahun values (NULL,'$tahun')");
header("location:tahun.php");