<?php
include "koneksi.php";

$idProduk = $_GET['idProduk'];


$idKategori= $_POST['idKategori'];
$namaProduk= $_POST['namaProduk'];
$ketProduk= $_POST['ketProduk'];

if(isset($_POST['ubah_foto'])){ 

	$fotoProduk= $_FILES['fotoProduk']['name'];
	$tmp = $_FILES['fotoProduk']['tmp_name'];
	$fotobaru = date('dmYHis').$fotoProduk;
	$path = 'gambar/'.$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM produk WHERE idProduk='$idProduk'";
		$sql = mysqli_query($connect, $query); 
		$data = mysqli_fetch_array($sql); 
		if(is_file("gambar/".$data['fotoProduk']))
			unlink("gambar/".$data['fotoProduk']); 
		$query = "UPDATE produk SET idKategori='".$idKategori."', namaProduk='".$namaProduk."', ketProduk='".$ketProduk."', fotoProduk='".$fotobaru."' WHERE idProduk='".$idProduk."'";
		$sql = mysqli_query($connect, $query); 
		if($sql){ 
			echo "<script>alert('Edit Data Berhasil !');location.href='tampilProduk.php';</script>";
		}else{
			
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='editProduk.php'>Kembali Ke Form</a>";
		}
	}else{
	
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='editProduk.php'>Kembali Ke Form</a>";
	}
}else{ 
	$query = "UPDATE produk SET idKategori='".$idKategori."', namaProduk='".$namaProduk."', ketProduk='".$ketProduk."' WHERE idProduk='".$idProduk."'";
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		echo "<script>alert('Edit Data Berhasil Tanpa Memperbarui FOTO !');location.href='tampilProduk.php';</script>";
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='editProduk.php'>Kembali Ke Form</a>";
	}
}
?>
