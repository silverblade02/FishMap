<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from lokasi_pendaratan where id_lopen='$id'");
header("location:lopen.php");