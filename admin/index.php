<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>SELAMAT DATANG DI HALAMAN ADMIN</h2>
	<br>
	<a href="logout.php"><b>KELUAR</b></a>
	<a href="tambah.php"> <b> Tambah </b></a>
	<?php
		require_once '../koneksi.php';
		$no=1;
		$data ="SELECT*FROM siswa  ";
		$c =$db->query($data);
		?>

	<table border="2"  >
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>telpon</th>
			<th>Alamat</th>
			
		</tr>
	</table>
		<?php	while ($s=mysqli_fetch_array($c) ) ?>

		{ ?>
		<table>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $s['nama']; ?></th>
				<th><?php echo $s['telpon']; ?></th>
				<th><?php echo $s['alamat']; ?></th>
				<th> <a href="edit.php?id=['id'] ">Edit</a><a href="hapus.php?id['id'] ">Hapus</a></th>
			</tr>
		</table>
 	<?php } ?>

</body>
</html>