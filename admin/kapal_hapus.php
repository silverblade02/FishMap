<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from kapal where id_kapal='$id'");
header("location:kapal.php");