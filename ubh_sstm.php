<?php
include "koneksi.php";

$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$notelp= $_POST['notelp'];
$perihal= $_POST['perihal'];

if (!empty($nama) && !empty($alamat) && !empty($notelp) && !empty($perihal)) {

    mysqli_query($koneksi, "UPDATE daftar SET nama = '$nama', alamat = '$alamat', notelp = '$notelp', perihal = '$perihal', WHERE id = '$id';");
    header('location:tabel.php');
}
?>