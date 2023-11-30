<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$jkel = $_POST['jkel'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];
 
mysqli_query($koneksi, "UPDATE kontak SET nama='$nama', jkel='$jkel', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan' WHERE id='$id'");
 
header("location:kontak.php?pesan=update");

?>