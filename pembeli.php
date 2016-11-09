<html>
	<head>
		<title>Daftar Transaksi</title>
	</head>
	<body>
		<?php
			include("koneksi.php");
			
			$sql = "SELECT * FROM barang";
			$hasil = mysql_query($sql);
			
			if(mysql_num_rows($hasil) == 0) {
				echo "Belum ada user yang terdaftar";
			}
			else{
				?>
				<table border=1 >
					<tr >
						<td>ID</td>
						<td>Nama</td>
						<td>Alamat</td>
						<td>No. Telepon</td>
						<td>Nama Barang</td>
						<td>Jumlah Barang</td>
					</tr>
				<?php
						while($user = mysql_fetch_assoc($hasil)){
						
				?>
					<tr>
						<td><?php echo $user["id"]; ?></td>
						<td><?php echo $user["nama"]; ?></td>
						<td><?php echo $user["alamat"]; ?></td>
						<td><?php echo $user["no_telp"]; ?></td>
						<td><?php echo $user["nama_barang"]; ?></td>
						
						<td><?php echo $user["jumlah_barang"]; ?></td>
					</tr>
				<?php
						}
				?>
				</table>
				<?php
			}
		?>
		<p><a href="pesanbarang.php">Tambah Transaksi </a></p>
		<p><a href="logout.php">Keluar</a></td></p>
	</body>
</html>