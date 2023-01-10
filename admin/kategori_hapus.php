<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from ikan where id_ikan='$id'");
header("location:kategori.php");