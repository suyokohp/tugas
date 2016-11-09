<?php
	$username = $_POST["username"];
	$password = md5($_POST["password"]);

	include('koneksi.php');
	
	//Query untuk validasi user
	$query = "SELECT * FROM user
			  WHERE username = '$username'
			  AND password = '$password'";
	
	//Menjalankan query di atas
	$hasil = mysql_query($query, $con);
	
	//Mendapatkan jumlah baris dari hasil query di atas
	$valid = mysql_num_rows ($hasil);
	
	// Jika jumlah baris = 0 => username & password tidak cocok
	// jila jumlah baris > 0 => username & password cocok
	//if($valid == 0)
		//echo "Username atau password salah";
	//else
		//echo "Login berhasil";
	$result = mysql_query($query) or die ("query gagal dijalankan");
	
	if (mysql_num_rows($result)>0)
	{
		session_start();
		
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		$_SESSION["login"] = TRUE;
		
		header ("Location: pesanbarang.php");
	}
	else
	{
		echo"Username dan Password tidak cocok <br>";
		echo"<a href='index.php'>kembalike form login</a>";
		
	}
	
	
?>