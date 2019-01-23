<?php
	session_start(); 		
	include "koneksi.php";

	$username=$_POST['username']; 	
	$password=$_POST['password']; 	
	$query = "select * from admin where username ='$username' and password='$password'"; 
	$result = mysqli_query($connect, $query); 

	if(mysqli_num_rows($result) > 0){ 	
		$_SESSION['username']= $username;
	
		header("location:index.php");   
	}else{   				
		echo "<script>alert('Username atau Password salah');
		location.href='login.php';</script>";
		//echo "<a href='login.php'>Kembali</a>";
		
	}
?>