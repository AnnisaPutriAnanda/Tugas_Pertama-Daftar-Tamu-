<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Catatan Tamu Harian
</h1>
<center>
<a href="tmbh.php">Tambah Catatan Pengunjung</a>

 <table class="table1" border='1'>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Nomor Telepon</td>
        <td>Perihal</td>
        <td>Tanggal</td>
        <td>Aksi</td>
    </tr>

<?php
include "koneksi.php";
$id=1;
$get_data = mysqli_query($koneksi, "select * from daftar");
while ($tampil = mysqli_fetch_array($get_data)){
    echo "
    <tr>

    <td>$id</td>
    <td>$tampil[nama]</td>
    <td>$tampil[alamat]</td>
    <td>$tampil[notelp]</td>
    <td>$tampil[perihal]</td>
    <td>$tampil[tanggal]</td>
    <td> <a href='hps.php?id=$tampil[id]'>Hapus</a>  |  <a href='ubh.php?id=$tampil[id]'>Ubah</a></td> 
    </tr>
    ";
    $id++;
}
?>

 </table>
</center>