<?php
// Load file koneksi.php
include "koneksi.php";

$idPesan = $_GET['idPesan'];
$query2 = "DELETE FROM pesan WHERE idPesan='".$idPesan."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){
	echo "<script>alert('Hapus Data Berhasil !');location.href='index.php';</script>";
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>