<?php
	require '../koneksi.php';

	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$telpon=$_POST['telpon'];
	$alamat=$_POST['alamat'];

	mysqli_query($db,"INSERT INTO siswa VALUES( '','$nama', '$telpon', '$alamat')  ");
	header("location:index.php");

?>