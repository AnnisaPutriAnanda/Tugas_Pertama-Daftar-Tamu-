<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Tambah Catatan</h1>
<div class="kotak_login">


<form action="tmbh_sstm.php" method="post">
     <center>
    <table>
        <tr>
             <td>Nama</td>
             <td><input type="text" class="form_login" name="nama"> </td>
        </tr> 
        <tr>
             <td>Alamat</td>
             <td><input type="text" class="form_login" name="alamat"> </td>
        </tr> 
        <tr>
             <td>Nomor Telp</td>
             <td><input type="text" class="form_login" name="notelp"> </td>
        </tr>
        <tr>
             <td>Perihal</td>
             <td><textarea name="perihal" class="form_login"></textarea> </td>
        </tr>
    </table>
    <input type="submit" class="tombol_login" value="Tambah" name="tambah">
             <center><a href="tabel.php">Kembali</center></a>
</center>
</form>

</div>



</body>
</html>