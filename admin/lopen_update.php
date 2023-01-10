<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$lopen = $_POST['lopen'];

mysqli_query($koneksi, "update lokasi_pendaratan set lopen='$lopen' where id_lopen='$id'");
header("location:lopen.php");