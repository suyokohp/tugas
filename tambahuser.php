<html>
	<head>
		<title>Tambah User</title>
	</head>
	<body>
		<?php
			if(isset($_POST["submit"])){
				include ("koneksi.php");
				
				$username	= $_POST["username"];
				$password	= md5 ($_POST["password"]);
				$role		= $_POST["role"];
				
				$sql = "INSERT INTO user
						VALUES ('$username', '$password', '$role')";
						
				$hasil = mysql_query($sql) or die("Query gagal dieksekusi");
				
				if($hasil ==TRUE){
					echo "User baru berhasil ditambahkan <br />";
					echo "<a href='daftaruser.php'>Lihat daftar user</a>";
				}
				else{
					echo "Gagal menambahkan user baru";
				}
			}
		?>
		<form action="tambahuser.php" method="post">
			<label for="username">Masukkan username baru :</label>
			<input type="text" name="username"/>
			<br />
			
			<label for="password">Masukkan password user :</label>
			<input type="password" name="password"?>
			<br />
			
			<label for="role">Tentukan role user :</label>
			<input type="text" name="role"/>
			<br />
			
			<input type="submit" name="submit" value="Simpan"/>
			<p><a href="index.php">Kembali</a></p>
		</form>
	</body>
</html>