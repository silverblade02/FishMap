<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$altang  = $_POST['altang'];

mysqli_query($koneksi, "update alat_tangkap set jenis_altang='$altang' where id_altang='$id'");
header("location:altang.php");