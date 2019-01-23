<?php
// Load file koneksi.php
include "koneksi.php";



// Ambil Data yang Dikirim dari Form
$idKategori= $_POST['idKategori'];
$namaKategori= $_POST['namaKategori'];
$ketKategori= $_POST['ketKategori'];
		$query = "UPDATE kategori SET namaKategori='".$namaKategori."', ketKategori='".$ketKategori."' WHERE idKategori='".$idKategori."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			echo "<script>alert('Edit Data Berhasil !');location.href='tampilKategori.php';</script>";
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='editkategori.php'>Kembali Ke Form</a>";
		}
	

?>
