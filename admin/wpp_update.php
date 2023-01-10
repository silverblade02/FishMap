<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$wpp  = $_POST['wpp'];

mysqli_query($koneksi, "update wpp set WPP='$wpp' where id_WPP='$id'");
header("location:wpp.php");