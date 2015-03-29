<?php
include('koneksi.php');
$id = $_GET['id_user'];
$query = "DELETE FROM pengunjung WHERE
id_pengunjung=$id";
$sql = mysql_query ($query);
if ($sql) {
header('location:akun_user.php');
} else {
echo "<h2><font color=red>Akun User gagal
dihapus</font></h2>";
}

?>
