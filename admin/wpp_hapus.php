<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from wpp where id_WPP='$id'");
header("location:wpp.php");