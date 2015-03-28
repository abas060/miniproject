<?php
session_start();
if (isset($_SESSION['login'])) { 
echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
} else {
header('location:loginwarn.php');
}
?>