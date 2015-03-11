<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>makanapaya.com</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="header">
  <p>makanapaya.com</p>
</div>
<table width="1352" height="481" cellpadding="0" cellspacing="1">
  <tr>
    <th width="1234" height="26" align="center" bgcolor="#CCCCCC" scope="col"><blockquote>
      <h1>Tambah Klien</h1>
    </blockquote></th>
  </tr>
  <tr>
    <th height="443" align="center" valign="top" bgcolor="#EAE6D5" scope="col">
    <?php		
				//kode php ini kita gunakan untuk menampilkan pesan eror
				if (!empty($_GET['error'])) {
					if ($_GET['error'] == 1) {
						echo '<h3>Username dan Password belum diisi!</h3>';
					} else if ($_GET['error'] == 2) {
						echo '<h3>Username belum diisi!</h3>';
					} else if ($_GET['error'] == 3) {
						echo '<h3>Password belum diisi!</h3>';
					} else if ($_GET['error'] == 4) {
						echo '<h3>Username dan Password tidak terdaftar!</h3>';
					}
				}
			?>
       <form action="actionlogin.php" method="POST">
				<table width="314" border="0" cellpadding="0" cellspacing="0">
				
					<tr>
						<th width="171" align="left">Nama Klien </th>
						<td width="143">  <input type="text"  class="login-inp" name="username" /></td>
					</tr>
					<tr>
						<th align="left">Alamat Klien</th>
						<td><input type="password" class="login-inp" name="password" /></td>
					</tr>
					<tr>
						<th align="left">No. Handphone</th>
						<td><input type="text"  class="login-inp" name="username2" /></td>
					</tr>
					<tr>
					  <th align="left">email</th>
					  <td><input type="text"  class="login-inp" name="username3" /></td>
				  </tr>
					<tr>
					  <th></th>
					  <td><input type="Submit" value='Login' /></td>
				  </tr>
					
				</table>
      </form>

    </p></th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>