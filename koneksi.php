<?php
$koneksi=mysqli_connect("localhost", "root", "") or die("Koneksi gagal dibangun"); 
mysqli_select_db($koneksi,"db_admin") or die("Database tidak dapat dibuka"); 
?>