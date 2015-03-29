<?php
include('koneksi.php');
$id = $_GET['id_klien'];
$query = "DELETE FROM akun_klien WHERE
id_klien=$id";
$sql = mysql_query ($query);
if ($sql) {
header('location:akun_klien.php');
} else {
echo "<h2><font color=red>Akun Klien gagal
dihapus</font></h2>";
}

?>