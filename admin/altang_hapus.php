<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from alat_tangkap where id_altang='$id'");
header("location:altang.php");