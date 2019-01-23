<?php
// Load file koneksi.php
include "koneksi.php";

$idKategori = $_GET['idKategori'];
$query2 = "DELETE FROM kategori WHERE idKategori='".$idKategori."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo "<script>alert('Hapus Data Berhasil !');location.href='tampilKategori.php';</script>";
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='tampilKategori.php'>Kembali</a>";
}
?>