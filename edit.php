<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
	<div class="judul">		
		<h1 align = "center" >EDIT DATA</h1>
	</div>
	<center><a href="kontak.php">Lihat Semua Data</a>
	<br><br>
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id='$id'")
	or die(mysqli_error($koneksi));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
            <tr>
				<td>Jenis Kelamin</td>
                <td>
                    <select name="jkel">
                    <option value="<?=$data['jkel'];?>"><?php echo $data['jkel'];?></option>
	                <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                    </td>
            </tr>	
            <tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Kota</td>
				<td><input type="text" name="kota" value="<?php echo $data['kota'] ?>"></td>					
			</tr>
            <tr>
				<td>Pesan</td>
				<td><input type="text" name="pesan" value="<?php echo $data['pesan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
    </center>
</body>
</html>