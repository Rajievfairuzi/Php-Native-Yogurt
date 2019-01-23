<?php
// Load file koneksi.php
include "koneksi.php";


// Ambil Data yang Dikirim dari Form

$idUser= $_POST['idAdmin'];
$nama= $_POST['namaAdmin'];
$username = $_POST['username'];
$password= $_POST['password'];

	$query = "INSERT INTO admin VALUES('".$idUser."','".$nama."','".$username."','".$password."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		//header("location: index.html"); // Redirect ke halaman index.php
		echo "<script>alert('Tambah Data Berhasil !');location.href='tampilAdmin.php';</script>";
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambahAdmin.php'>Kembali Ke Form</a>";
	}


?>
