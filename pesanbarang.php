<html>
	<head>
		<title>Transaksi</title>
	</head>
		<style>
		</style
	<body>
		<p><h3>TABEL TRANSAKSI</p></h3>
		<table border="2px">
		<form action="pesanbarang.php" method="post">
			<tr>
				<td><label for="id">1. Masukkan id pembeli </label>
				<td>:</td>
				<td><input type="text" name="id"/></td>
				<br />
			</tr>
			<tr>
				<td><label for="nama">2. Masukkan nama pembeli </label></td>
				<td>:</td>
				<td><input type="text" name="nama"/></td>
			</tr>
			<tr>
				<td><label for="alamat">Masukkan alamat pembeli </label></td>
				<td>:</td>
				<td><input type="text" name="alamat"?></td>
			</tr>
			<tr>
				<td><label for="no_telp">Masukkan nomer telepon pembeli :</label></td>
				<td>:</td>
				<td><input type="text" name="no_telp"?></td>
			</tr>
			<tr>
				<td><label for="nama_barang">Masukkan nama barang yang dibeli  :</label></td>
				<td>:</td>
				<td><input type="text" name="nama_barang"/></td>
			</tr>
			<tr>
				<td><label for="jumlah_barang">Masukkan jumlah barang dibeli  :</label></td>
				<td>:</td>
				<td><input type="text" name="jumlah_barang"/></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</form>
		</table>
		
	</body>
	<?php
			if(isset($_POST["submit"])){
				include ("koneksi.php");
				$id = $_POST["id"];
				$nama	= $_POST["nama"];
				$alamat	= $_POST["alamat"];
				$no_telp= $_POST["no_telp"];
				$nama_barang= $_POST["nama_barang"];
				$jumlah_barang= $_POST["jumlah_barang"];
				
				$sql = "INSERT INTO barang
						VALUES ($id, '$nama', '$alamat', '$no_telp', '$nama_barang', '$jumlah_barang')";
				$hasil = mysql_query($sql) or die("System tidak beroprasi");
				
				
				if($hasil ==TRUE){
					echo "Transaksi sukses <br />";
					echo "<a href='pembeli.php'>Lihat daftar transaksi</a>";
				}
				else{
					echo "Gagal melakukan transaksi";
				}
			}
		?>
		<p><a href="pembeli.php">lihat riwayat transaksi</a></p>
		<p><a href="logout.php">Keluar</a></p>
</html>