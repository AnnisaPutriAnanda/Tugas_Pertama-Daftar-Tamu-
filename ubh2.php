<?php 
    include "koneksi.php";
    $mkid = $_GET['no'];
    $query = mysqli_query($koneksi, "SELECT * FROM daftar WHERE no = '$mkid'");
    $m = mysqli_fetch_object ($query);
    ?>
    <form method="post" action="ubh_sstm.php">
        <input type="hidden" value ="<?php print $m->no; ?>" name="mkid"/>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php print $m->nama; ?>" width="100%" required/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php print $m->alamat; ?>" width="100%" required/></td>
            </tr>
            <tr>
                <td>Nomor Telp</td>
                <td>:</td>
                <td><input type="text" name="notelp" value="<?php print $m->notelp; ?>" width="100%" required/></td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>:</td>
                <td><input type="text" name="perihal" value="<?php print $m->perihal; ?>" width="100%" required/></td>
            </tr>
</table> <br> <input type="submit" value="save" />
</form></center>
    </body>
</html>