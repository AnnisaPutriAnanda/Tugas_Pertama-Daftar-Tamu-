<?php

include "koneksi.php";

$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$notelp= $_POST['notelp'];
$perihal= $_POST['perihal'];


if (!empty($nama) && !empty($alamat) && !empty($notelp) && !empty($perihal)) {

    mysqli_query($koneksi, "INSERT INTO daftar(nama,alamat,notelp,perihal) VALUES ('$nama', '$alamat', '$notelp', '$perihal')");
    header('location: tabel.php');
}else{
    header('location: tmbh.php');
}
?>

?>