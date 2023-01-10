<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$kapal  = $_POST['kapal'];

mysqli_query($koneksi, "update kapal set jenis_kapal='$kapal' where id_kapal='$id'");
header("location:kapal.php");