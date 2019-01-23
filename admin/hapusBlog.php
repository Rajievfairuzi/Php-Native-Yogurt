<?php

include "koneksi.php";

$idBlog = $_GET['idBlog'];

$query = "SELECT * FROM blog WHERE idBlog='".$idBlog."'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql); 

if(is_file("gambar/".$data['fotoBlog'])) 
	unlink("gambar/".$data['fotoBlog']); 

$query2 = "DELETE FROM blog WHERE idBlog='".$idBlog."'";
$sql2 = mysqli_query($connect, $query2); 
if($sql2){ 
	echo "<script>alert('Hapus Data Berhasil !');location.href='tampilBlog.php';</script>";
}else{
	echo "Data gagal dihapus. <a href='tampilBlog.php'>Kembali</a>";
	
}
?>
