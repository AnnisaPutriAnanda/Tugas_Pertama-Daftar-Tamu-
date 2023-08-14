<html>
     <head>
     <link rel="stylesheet" type="text/css" href="style.css">
<h1>Ubah Catatan</h1>
</head>
<body>
<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "SELECT * FROM daftar WHERE id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
?>
<div class="kotak_login">
<form action="ubh.sstm.php" method="post"> 
    <table>
        <tr>
             <td>Nama</td>
             <td><input type="text" class="form_login" name="nama" value="<?php echo $data['nama']; ?>"> </td>
        </tr>
        <tr>
             <td>Alamat</td>
             <td><input type="text" class="form_login" name="alamat" value="<?php echo $data['alamat']; ?>"> </td>
        </tr>
        <tr>
             <td>Nomor Telp</td>
             <td><input type="text" class="form_login" name="notelp" value="<?php echo $data['notelp']; ?>"> </td>
        </tr>
        <tr>
             <td>Perihal</td>
             <td><input type="textarea" class="form_login" name="perihal" value="<?php echo $data['perihal']; ?>"></textarea>  </td>
        </tr>
        <tr>
             <td></td>
             <td><input type="submit"  class="tombol_login" value="Ubah" name="ubah"> </td>
        </tr>
    </table>
</div>


</form>
</body>
</html>