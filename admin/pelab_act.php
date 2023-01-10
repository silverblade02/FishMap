<?php 
include '../koneksi.php';
$alamat = $_POST['addr'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];

mysqli_query($koneksi, "insert into pelabuhan values (NULL,'$alamat','$lat','$lon')");
header("location:pelab.php");