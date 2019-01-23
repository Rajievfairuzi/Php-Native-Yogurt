<?php

include "koneksi.php";



$idPesan= $_POST['idPesan'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$isi = $_POST['isi'];
$tgl= date("Y-m-d H:i:s");


	$query = "INSERT INTO pesan VALUES('".$idPesan."','".$nama."','".$email."','".$subject."','".$isi."','".$tgl."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		echo "<script>alert('Kirim Pesan Berhasil !');location.href='contact.php';</script>";
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan .";
		
	}


?>
