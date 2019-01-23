<?php

include "koneksi.php";
$idBlog = $_POST['idBlog'];

$judulBlog= $_POST['judulBlog'];
$isiBlog= $_POST['isiBlog'];
$tglBlog= date("Y-m-d H:i:s");
$fotoBlog= $_FILES['fotoBlog']['name'];
$tmp = $_FILES['fotoBlog']['tmp_name'];

	

$fotobaru = date('dmYHis').$fotoBlog;


$path = 'gambar/'.$fotobaru;

if(move_uploaded_file($tmp, $path)){ 
	
	$query = "INSERT INTO blog VALUES('".$idBlog."','".$judulBlog."','".$isiBlog."','".$tglBlog."','".$fotobaru."')";
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		echo "<script>alert('Tambah Data Berhasil !');location.href='tampilBlog.php';</script>";
	}else{
	
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambahBlog.php'>Kembali Ke Form</a>";
	}
}else{
	
	$query = "INSERT INTO blog VALUES('".$idBlog."','".$judulBlog."','".$isiBlog."','".$tglBlog."','".$fotobaru."')";
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		echo "<script>alert('Tambah Data Berhasil !');location.href='tampilBlog.php';</script>";
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambahBlog.php'>Kembali Ke Form</a>";
	}
	
}
?>
