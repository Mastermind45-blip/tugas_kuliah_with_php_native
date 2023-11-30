<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM kontak WHERE id='$id'")
or die(mysqli_error($koneksi));
 
header("location:kontak.php?pesan=hapus");
?>