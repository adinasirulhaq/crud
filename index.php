<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php 
		session_start();
		if (isset($_GET['pesan'])){
			if($_GET[pesan]=="gagal"){
				echo " Silahkan Periksa Username Atau Password Anda";
			}
			else if ($_GET['pesan']=="belum_login") {
				# code...
				echo "Anda Harus Login Terlebih Dahulu..";
			}
			else if ($_GET['pesan']=="logout") {
				# code...
				echo "Anda sukses keluar..,";
			}
			
		}

	?>
	<h2>SILAHKAN LOGIN</h2>
	<form action="login.php" method="post"  >
	<table>
		<tr><th>Username : </th><th><input type="text" name="username" placeholder="Masukkan Username"></th></tr>
		<tr><th>Password : </th><th><input type="password" name="password" "></th></tr>
		<tr><th><input type="submit" value="LOGIN "><input type="reset" value="CLEAR "></th></tr>
	</table>
	

	</form>
	
</body>
</html>