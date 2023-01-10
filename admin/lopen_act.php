<?php 
include '../koneksi.php';
$lopen  = $_POST['lopen'];

mysqli_query($koneksi, "insert into lokasi_pendaratan values (NULL,'$kategori')");
header("location:lopen.php");