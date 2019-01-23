<?php

include "koneksi.php";
$idProduk = $_POST['idProduk'];

$namaProduk= $_POST['namaProduk'];
$ketProduk= $_POST['ketProduk'];
$fotoProduk= $_FILES['fotoProduk']['name'];
$tmp = $_FILES['fotoProduk']['tmp_name'];

	

$fotobaru = date('dmYHis').$fotoProduk;


$path = 'gambar/'.$fotobaru;
$idKategori= $_POST['idKategori'];

if(move_uploaded_file($tmp, $path)){ 
	
	$query = "INSERT INTO produk VALUES('".$idProduk."','".$namaProduk."','".$ketProduk."','".$fotobaru."','".$idKategori."')";
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		echo "<script>alert('Tambah Data Berhasil !');location.href='tampilProduk.php';</script>";
	}else{
	
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambahProduk.php'>Kembali Ke Form</a>";
	}
}else{
	
	$query = "INSERT INTO produk VALUES('".$idProduk."','".$namaProduk."','".$ketProduk."','".$fotobaru."','".$idKategori."')";
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		echo "<script>alert('Tambah Data Berhasil !');location.href='tampilProduk.php';</script>";
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambahProduk.php'>Kembali Ke Form</a>";
	}
	
}
?>
