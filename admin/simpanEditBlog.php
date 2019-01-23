<?php
include "koneksi.php";

$idBlog = $_GET['idBlog'];

$judulBlog = $_POST['judulBlog'];
$isiBlog = $_POST['isiBlog'];
$tglBlog= date("Y-m-d H:i:s");
if(isset($_POST['ubah_foto'])){ 

	$fotoBlog= $_FILES['fotoBlog']['name'];
	$tmp = $_FILES['fotoBlog']['tmp_name'];
	$fotobaru = date('dmYHis').$fotoBlog;
	$path = 'gambar/'.$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM blog WHERE idBlog='$idBlog'";
		$sql = mysqli_query($connect, $query); 
		$data = mysqli_fetch_array($sql); 
		if(is_file("gambar/".$data['fotoBlog']))
			unlink("gambar/".$data['fotoBlog']); 
		$query = "UPDATE blog SET  judulBlog='".$judulBlog."', isiBlog='".$isiBlog."', tglBlog='".$tglBlog."',fotoBlog='".$fotobaru."' WHERE idBlog='".$idBlog."'";
		$sql = mysqli_query($connect, $query); 
		if($sql){ 
			echo "<script>alert('Edit Data Berhasil !');location.href='tampilBlog.php';</script>";
		}else{
			
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='editBlog.php'>Kembali Ke Form</a>";
		}
	}else{
	
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='editBlog.php'>Kembali Ke Form</a>";
	}
}else{ 
$query = "UPDATE blog SET  judulBlog='".$judulBlog."', isiBlog='".$isiBlog."', tglBlog='".$tglBlog."' WHERE idBlog='".$idBlog."'";
		$sql = mysqli_query($connect, $query); 
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		echo "<script>alert('Edit Data Berhasil Tanpa Memperbarui FOTO !');location.href='tampilBlog.php';</script>";
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='editBlog.php'>Kembali Ke Form</a>";
	}
}
?>
