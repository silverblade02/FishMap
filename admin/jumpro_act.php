<?php 
include '../koneksi.php';
$ikan  = $_POST['ikan'];
$tahun  = $_POST['thn'];
$lopen  = $_POST['lopen'];
$prov  = $_POST['prov'];
$kabkot  = $_POST['kabkot'];
$pelabuhan  = $_POST['pelab'];
$kapal  = $_POST['kapal'];
$altang  = $_POST['altang'];
$wpp  = $_POST['wpp'];
$vopro  = $_POST['vopro'];
$nipro  = $_POST['nipro'];

mysqli_query($koneksi, "insert into jumlah_produksi values (NULL,'$ikan','$tahun','$lopen','$prov','$kabkot','$pelabuhan','$kapal','$altang','$wpp','$vopro','$nipro')")or die(mysqli_error($koneksi));
header("location:transaksi.php");