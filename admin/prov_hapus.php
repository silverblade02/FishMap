<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from provinsi where id_provinsi='$id'");
header("location:prov.php");