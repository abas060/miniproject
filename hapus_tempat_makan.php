<?php
include('koneksi.php');
$id = $_GET['id_tempat_makan'];
$query = "DELETE FROM tempat_makan WHERE
id_tempat_makan=$id";
$sql = mysql_query ($query);
if ($sql) {
header('location:tempat_makan.php');
} else {
echo "<h2><font color=red>Tempat User gagal
dihapus</font></h2>";
}

?>
