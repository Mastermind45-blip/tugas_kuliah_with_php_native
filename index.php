<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<center>Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "<center>Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<center>Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    <br>
    <br>
	<form method="post" action="cek_login.php">
		<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>