<?php 
include '../koneksi.php';
$provinsi = $_POST['provinsi'];

mysqli_query($koneksi, "insert into provinsi values (NULL,'$provinsi')");
header("location:prov.php");