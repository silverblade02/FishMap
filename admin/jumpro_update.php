<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$ikan  = $_POST['ikan'];
$tahun  = $_POST['thn'];
$lopen  = $_POST['lopen'];
$prov  = $_POST['prov'];
$kabkot  = $_POST['kabkot'];
$pelab = $_POST['pelab'];
$kapal  = $_POST['kapal'];
$altang  = $_POST['altang'];
$wpp  = $_POST['wpp'];
$vopro  = $_POST['vopro'];
$nipro  = $_POST['nipro'];

mysqli_query($koneksi, "update jumlah_produksi set ikan='$ikan', thn='$tahun', lp='$lopen', provinsi='$prov', kabkot='$kabkot', pelabuhan='$pelab', kapal='$kapal', altang='$altang', wp='$wpp', vol_produksi='$vopro', nil_produksi='$nipro' where id_jumpro='$id'") or die(mysqli_error($koneksi));
header("location:transaksi.php");