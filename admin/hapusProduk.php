<?php

include "koneksi.php";

$idProduk = $_GET['idProduk'];

$query = "SELECT * FROM produk WHERE idProduk='".$idProduk."'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql); 

if(is_file("gambar/".$data['fotoProduk'])) 
	unlink("gambar/".$data['fotoProduk']); 

$query2 = "DELETE FROM produk WHERE idProduk='".$idProduk."'";
$sql2 = mysqli_query($connect, $query2); 
if($sql2){ 
	echo "<script>alert('Hapus Data Berhasil !');location.href='tampilProduk.php';</script>";
}else{
	echo "Data gagal dihapus. <a href='tampilProduk.php'>Kembali</a>";
	
}
?>
