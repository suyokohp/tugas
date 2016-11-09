<html>
	<head>
		<title>Fitur Login</title>
	</head>
	<body>
		<table border="2px soft">
		<form action="login.php" method="post">
			<p>Silahkan Masukkan Username dan password anda:</p>
			<tr>
				<td><label for="username">Username </label></td>
				<td>:</td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td>:</td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="LOGIN"/></td>
			</tr>
		</form>
		</table>
		<a href="tambahuser.php">Daftar</a>
	</body>
</html>