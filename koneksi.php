<?php
$koneksi = mysqli_connect("localhost","root","","data");
if (mysqli_connect_errno($koneksi)){
	echo "".mysqli_connect_error();
}else{
	echo "";
}
?>
