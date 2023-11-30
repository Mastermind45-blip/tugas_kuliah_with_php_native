<!DOCTYPE html>
<html>
    <head>
        <title>Input Kontak</title>
    </head>
    <body>
        <?php
        include "session.php";
        ?>
        <h1 align = "center">INPUT DATA</h1><br>
        <center><a href="kontak.php">LIHAT KONTAK</a></center><br>
        <center><a href="logout.php">LOG OUT</a></center><br>
        <form method="POST" action="simpan_kontak.php">
            <table width="400" align="center" cellpadding="2" cellspacing="2"> 
            <tr>
                    <td width="130">Kode</td>
                    <td><input type="text" name="id" required ="true"></td>
                </tr>
            <tr>
                    <td width="130">Nama</td>
                    <td><input type="text" name="nama" required ="true"></td>
                </tr>
                <tr>
                    <td width="130">Jenis Kelamin</td>
                    <td>
                    <select name="jkel">
	                <option value="">--- Pilih jenis kelamin ---</option>
	                <option value="Laki-laki">Laki-laki</option>
	                <option value="Perempuan">Perempuan</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td width="130">Email</td>
                    <td><input type="text" name="email" required ="true"></td>
                </tr>
                <tr>
                    <td width="130">Alamat</td>
                    <td><input type="text" name="alamat" required ="true"></td>
                </tr>
                <tr>
                    <td width="130">Kota</td>
                    <td><input type="text" name="kota" required ="true"></td>
                </tr>
                <tr>
                    <td width="130">Pesan</td>
                    <td><input type="text" name="pesan" required ="true"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    <input type="submit" name="btntambah" value="Simpan">
                    <input type="reset" name="btnreset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
