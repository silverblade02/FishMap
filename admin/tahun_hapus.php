<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from tahun where id_tahun='$id'");
header("location:tahun.php");