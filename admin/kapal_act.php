<?php 
include '../koneksi.php';
$kapal  = $_POST['kapal'];

mysqli_query($koneksi, "insert into kapal values (NULL,'$kapal')");
header("location:kapal.php");