<?php
	session_start(); 		
	include "koneksi.php";

	$username=$_POST['username']; 	
	$password=$_POST['password']; 	
	$query = "select * from admin where username ='$username' and password='$password'"; 
	$sql = mysqli_query($connect, $query); 

	if($query==TRUE){ 	
		$hasil = mysqli_fetch_array($query);
		$_SESSION['username']= $username;
		header("location:index2.php");   
	}else{   				
		echo "<script>alert('Username atau Password salah')</script>";
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://localhost/yogurt/admin/login.php">';
	}
?>