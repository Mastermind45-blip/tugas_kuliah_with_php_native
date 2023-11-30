<?php 
// koneksi database
include 'koneksi.php';

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis 
$id=$_POST['id']; 
$nama=$_POST['nama']; 
$jkel=$_POST['jkel']; 
$email=$_POST['email']; 
$alamat=$_POST['alamat']; 
$kota=$_POST['kota']; 
$pesan=$_POST['pesan']; 

// Query simpan data ke database
mysqli_query($koneksi, "insert into kontak values ('$id','$nama','$jkel','$email','$alamat','$kota','$pesan')") or die("Proses simpan ke database gagal"); 

// Menutup Koneksi
mysqli_close($koneksi); 
header("location:kontak.php?pesan=input"); 
?>
