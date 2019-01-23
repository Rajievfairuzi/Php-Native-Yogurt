<?php
// Load file koneksi.php
include "koneksi.php";



// Ambil Data yang Dikirim dari Form
$idAdmin= $_POST['idAdmin'];
$namaAdmin= $_POST['namaAdmin'];
$username= $_POST['username'];
$password= $_POST['password'];

		$query = "UPDATE admin SET namaAdmin='".$namaAdmin."', username='".$username."', password='".$password."' WHERE idAdmin='".$idAdmin."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			echo "<script>alert('Edit Data Berhasil !');location.href='tampilAdmin.php';</script>";
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='editadmin.php'>Kembali Ke Form</a>";
		}
	

?>
