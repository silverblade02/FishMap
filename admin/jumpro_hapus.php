<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from jumlah_produksi where id_jumpro='$id'");
header("location:transaksi.php");