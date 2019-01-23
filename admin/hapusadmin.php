<?php
// Load file koneksi.php
include "koneksi.php";

$idAdmin = $_GET['idAdmin'];
$query2 = "DELETE FROM admin WHERE idAdmin='".$idAdmin."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo "<script>alert('Hapus Data Berhasil !');location.href='tampilAdmin.php';</script>";
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='tampilAdmin.php'>Kembali</a>";
}
?>