<?php 
include '../koneksi.php';
$wpp  = $_POST['wpp'];

mysqli_query($koneksi, "insert into wpp values (NULL,'$wpp')");
header("location:wpp.php");