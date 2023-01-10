<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tahun  = $_POST['tahun'];

mysqli_query($koneksi, "update tahun set tahun='$tahun' where id_tahun='$id'");
header("location:tahun.php");