<?php
	session_start();

	include 'koneksi.php';
	$username =$_POST['username'];
	$password =$_POST['password'];


	$data="SELECT*FROM admin WHERE username ='$username' and password='$password' ";
	$query=$db->query($data);
	$test = $query->num_rows;


	

	if($query>0){
				
		$_SESSION['username']=$username;
		$_SESSION['status']="login";
		header("location:admin/index.php");
		
		}
	else {
					header("index.php?pesan=gagal");
	
		}
		

		
?>