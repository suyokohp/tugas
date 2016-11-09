<html>
	<head>
		<title>Daftar User</title>
	</head>
	<body>
		<?php
			include("koneksi.php");
			
			$sql = "SELECT * FROM user";
			$hasil = mysql_query($sql);
			
			if(mysql_num_rows($hasil) == 0) {
				echo "Belum ada user yang terdaftar";
			}
			else{
				?>
				<table border=1>
					<tr>
						<th>Username</th>
						<th>Password</th>
						<th>Role</th>
					</tr>
				<?php
						while($user = mysql_fetch_assoc($hasil)){
						//while($user = mysql_fetch_row($hasil)){
						//while($user = mysql_fetch_array($hasil)){
						//while($user = mysql_fetch_object($hasil)){
				?>
					<tr><!-- ASSOC memanggil index melalui nama kolom dan menampilkannya -->
						<td><?php echo $user["username"]; ?></td>
						<td><?php echo $user["password"]; ?></td>
						<td><?php echo $user["role"]; ?></td>
					</tr>
					<!-- ROW memanggil index melalui angka dan menampilkannya<tr>
						<td><?php echo $user["0"]; ?></td>
						<td><?php echo $user["1"]; ?></td>
						<td><?php echo $user["2"]; ?></td>
					</tr>-->
					<!-- ARRAY memanggil index melalui angka dan nama kolom dan menampilkannya<tr>
						<td><?php echo $user["0"]; ?></td>
						<td><?php echo $user["password"]; ?></td>
						<td><?php echo $user["role"]; ?></td>
					</tr>-->
					<!-- OBJECT memanggil index melalui nama table didatabase dan nama kolom dan menampilkannya<tr>
						<td><?php echo $user->username; ?></td>
						<td><?php echo $user->password; ?></td>
						<td><?php echo $user->role; ?></td>
					</tr>-->
				<?php
						}
				?>
				</table>
				<?php
			}
		?>
		<a href="tambahuser.php">Tambah User Baru</a>
	</body>
</html>