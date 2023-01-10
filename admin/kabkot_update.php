<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$kabkot  = $_POST['kabkot'];

mysqli_query($koneksi, "update kabupaten_kota set nama_kabkot='$kabkot' where id_kabkot='$id'");
header("location:kabkot.php");