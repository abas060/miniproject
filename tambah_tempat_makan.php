<?php
session_start();
if (isset($_SESSION['login'])) { 
echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
} else {
header('location:loginwarn.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>makanapaya.com</title>
<style type="text/css">
.header {
}
.header {
	background-color: #A2FF9F;
	text-align: left;
	font-style: normal;
	font-weight: bolder;
}
.navigasi {
	background-color: #060;
	font-style: normal;
	text-align: right;
	color: #FFF;
	font-weight: bolder;
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
}
.footer {
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-style: normal;
	font-weight: bolder;
	color: #FFF;
	text-align: center;
}
.div {
	text-align: left;
}
.body {
	color: #BFFFBF;
	text-align: left;
	font-style: normal;
	font-weight: bolder;
}
</style>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #D8FFD7;
	color: #000;
	text-align: center;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script><script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/chunk:n4:default;aladin:n4:default.js" type="text/javascript"></script>

</head>

<body>
<header class="header">
  <p style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-style: normal; font-weight: bold;">&nbsp;</p>
  <p style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-style: normal; font-weight: bold; font-size: xx-large; text-align: center;">Makan Apa Ya ?</p>
  <p class="header" style="font-weight: lighter; font-style: italic; text-align: center;">Portal Informasi Pencarian Tempat Makan di Surabaya
  <nav>
    <hr width="100%" size="10" noshade="noshade">
  </nav>
</header>
<section>	
  <table width="100%" border="0" align="right">
    <tr>
      <td width="94%" align="center"><a href="notifikasi.php">Beranda</a> <span style="font-style: italic; font-weight: bold;">|</span> <a href="akun_klien.php">Akun Klien</a> <span style="font-style: italic; font-weight: bold;">|</span> <a href="akun_user.php">Akun User</a> <span style="font-weight: bold">|</span> <a href="tempat_makan.php">Tempat Makan</a> | <a href="testimoni.php">Testimoni</a> | <a href="setting.php">Setting</a></td>
    </tr>
  </table>
  <table width="100%" border="0" align="left">
    <tr style="text-align: left">
      <td width="75%" bgcolor="#006600" class="footer" style="font-style: normal; color: #FFF; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-weight: bolder;">Tempat Makan</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#A2FF9F" class="body" style="font-style: normal; color: #000000; font-size: 16px;"><FORM ACTION="tempat_makan.php" METHOD="POST" NAME="input">
        <table width="100%">
          <tr>
            <td width="22%" valign="top"><p>Nama Tempat Makan</p>
              <p>Alamat</p>
              <p>No Telepon</p>
              <p>e-mail</p>
              <p>Deskripsi</p></td>
            <td width="78%"><p>
              <label for="textfield">:</label>
              <input name="textfield" type="text" required="required" id="textfield" />
              </p>
              <label for="textfield2">:</label>
                <input name="textfield2" type="text" required="required" id="textfield2" />
              <p>
                <label for="textfield3"> :</label>
                <input name="textfield3" type="text" required="required" id="textfield3" />
            </p>
              <p>
                <label for="textfield4">:</label>
                <input name="textfield4" type="text" required="required" id="textfield4" />
              </p>
              <p>
                <textarea name="textarea" cols="45" rows="5" wrap="soft" id="textarea"></textarea>
              </p>
              <p> 
                <input type="submit" name="submit2" id="submit2" value="Save" />
              </p></td>
          </tr>
        </table>
     </FORM>
              
        </p>
   </p></td>
    </tr>
    

  </table>
</section>
<footer class="footer">
<form action="admin.php" method="post" name="input">
  <input type="submit" name="button" id="button" value="Log out" />
  </form>
<?php
if(isset($_POST['button'])){
session_start();
unset ($_SESSION);
session_destroy();
echo "<h1>Anda sudah berhasil LOGOUT</h1>";
}
?>


</footer>
<table width="100%" border="0" align="right">
    
</table>
</body>
</html>