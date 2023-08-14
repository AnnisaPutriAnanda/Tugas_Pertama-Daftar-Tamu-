<?php
include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {

    mysqli_query($koneksi, "DELETE FROM daftar WHERE id = '$id'");
    header('location:tabel.php');

}else{
    header('location:tabel.php');
}