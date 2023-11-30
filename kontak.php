<!DOCTYPE html>
<html>
<head>
	<title>Daftar Kontak</title>
</head>
<body>
		<?php
        include "session.php";
        ?>
	<h2 align ="center">DAFTAR KONTAK</h2>
	<center><a href="form_kontak.php">+ TAMBAH KONTAK</a></center>
	<br>
	<center>
	<?php 
        if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
    	}
	?>
	</center>
	<br>
	<table align="center" border="1">
		<tr>
			<th>NO</th>
            <th>Kode</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
            <th>Email</th>
			<th>Alamat</th>
            <th>Kota</th>
            <th>Pesan</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from kontak");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
                <td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jkel']; ?></td>
                <td><?php echo $d['email']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['kota']; ?></td>
                <td><?php echo $d['pesan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>