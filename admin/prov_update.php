<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$provinsi  = $_POST['provinsi'];

mysqli_query($koneksi, "update provinsi set nama_provinsi='$provinsi' where id_provinsi='$id'");
header("location:prov.php");