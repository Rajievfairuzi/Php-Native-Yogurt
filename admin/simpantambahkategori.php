<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$idKategori= $_POST['idKategori'];
$namaKategori = $_POST['namaKategori'];
$ketKategori = $_POST['ketKategori'];


	$query = "INSERT INTO kategori VALUES('".$idKategori."','".$namaKategori."','".$ketKategori."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		//header("location: index.html"); // Redirect ke halaman index.php
		echo "<script>alert('Tambah Data Berhasil !');location.href='tampilKategori.php';</script>";
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambahKategori.php'>Kembali Ke Form</a>";
	}


?>
