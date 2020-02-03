<?php
	$host ="localhost";
	$user ="root";
	$pass ="";
	$dbname ="lengkap";

	$db= new mysqli($host, $user, $pass, $dbname);


	if (mysqli_connect_errno() )
	{
		echo"Gagal..,";
	}
?>