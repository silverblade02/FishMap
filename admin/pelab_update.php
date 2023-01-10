<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$alamat = $_POST['addr'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];

mysqli_query($koneksi, "update pelabuhan set nama_pelabuhan='$alamat', lat='$lat', lon='$lon' where id_pelabuhan='$id'");
header("location:pelab.php");