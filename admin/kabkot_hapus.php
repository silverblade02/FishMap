<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from kabupaten_kota where id_kabkot='$id'");
header("location:kabkot.php");