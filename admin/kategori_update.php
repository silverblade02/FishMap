<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$kategori  = $_POST['ikan'];

mysqli_query($koneksi, "update ikan set nama_ikan='$kategori' where id_ikan='$id'");
header("location:kategori.php");