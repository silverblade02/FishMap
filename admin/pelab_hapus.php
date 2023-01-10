<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from pelabuhan where id_pelabuhan='$id'");
header("location:pelab.php");