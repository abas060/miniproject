<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>makanapaya.com</title>
<link href="SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
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
  <p style="font-weight: lighter; font-style: italic; text-align: center;">Portal Informasi Pencarian Tempat Makan di Surabaya
  <nav>
    <hr width="100%" size="10" noshade="noshade">
  </nav>
</header>
<nav class="navigasi">
  <table width="100%">
    <tr>
      <td width="95%" height="26" align="right" valign="middle"><form action="actionloginpengunjung.php" method="post" name="input">
          <input name="textfield" type="text" id="textfield" value="username" />
          <input name="password" type="password" id="password" value="password" />
          <input type="submit" name="Login" id="button" value="Sign in" />
      </form></td>
      <td width="5%">
      <form action="signup.php">
      <input type="submit" name="button2" id="button2" value="Sign up" />
    </form>
    </td>
    </tr>
  </table>
</nav>
<section>	
  <table width="100%" border="0" align="right">
    <tr>
      <td width="65%">Beranda <span style="font-style: italic; font-weight: bold;">|</span><a href="tentang_kami.php"> Tentang Kami</a> <span style="font-style: italic; font-weight: bold;">|</span> <a href="daftar_tempat _makan.php">DaftarTempat Makan</a> <span style="font-weight: bold">|</span> <a href="kontak.php">Kontak</a></td>
      <td width="40%" align="right"><input name="textfield2" type="text" id="textfield2" value="search">
      <input type="button" name="button3" id="button3" value="Search"></td>
    </tr>
  </table>
  <table width="100%" border="0" align="left">
    <tr style="text-align: left">
      <td width="17%" bgcolor="#006600" class="footer"><span class="body"><span class="footer">Cari Berdasarkan Kategori</span></span></td>
      <td width="75%" bgcolor="#006600" class="footer" style="font-style: normal; color: #FFF; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-weight: bolder;">Home</td>
    </tr>
    <tr>
      <td width="17%" bgcolor="#A2FF9F" class="footer" style="text-align: left; color: #000;">
       <ul id="MenuBar1" class="MenuBarVertical">
        <li><a class="MenuBarItemSubmenu" href="#">Harga</a>
          <ul>
            <li><a href="#">Harga 1</a></li>
            <li><a href="#">Harga 2</a></li>
            <li><a href="#">Harga 3</a></li>
          </ul>
        </li>
          <li><a href="#" class="MenuBarItemSubmenu">Lokasi</a>
            <ul>
              <li><a href="#">Lokasi 1</a></li>
              <li><a href="#">Lokasi 2</a></li>
            </ul>
        </li>
        <li><a class="MenuBarItemSubmenu" href="#">Jenis Makanan</a>
          <ul>
            <li><a href="#">Jenis Makanan  1</a>            </li>
            <li><a href="#">Jenis Makanan 2</a></li>
            <li><a href="#">Jenis Makanan 3</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Jenis Tempat Makanan</a>
          <ul>
            <li><a href="#">Jenis Tempat Makanan 1</a></li>
            <li><a href="#">Jenis Tempat Makanan 2</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Rating</a>
          <ul>
            <li><a href="#">Rating 1</a></li>
            <li><a href="#">Rating 2</a></li>
          </ul>
        </li>
      </ul></td>
      <td bgcolor="#A2FF9F" class="body" style="font-style: normal; color: #000000;">&nbsp;</td>
    </tr>
  </table>
</section>
<table width="100%" border="0" align="right">
    <tr>
      <td width="40%" bgcolor="#006600" class="footer">Tempat Makan Populer Bulan Ini</td>
      <td width="60%" bgcolor="#006600" class="footer">Tempat Makan Baru</td>
  </tr>
    <tr>
      <td bgcolor="#A2FF9F">&nbsp;</td>
      <td bgcolor="#A2FF9F">&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>