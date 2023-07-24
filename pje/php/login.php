<?php

session_start();

// jika sudah login, alihkan ke halaman list
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PJE Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v2">
</head>
<body>
<div class="header">
<c style="color: white; align-items: center; margin: 720px; font-size: 100%;"> <br/>
<d style="color: white; align-items: center; margin: 720px; font-size: 100%;"> <br/></d>
<e style="color: white; align-items: center; margin: 720px; font-size: 100%;"> <br/></e>
<f style="color: white; align-items: center; margin: 720px; font-size: 100%;"> <br/></f>
<g style="color: white; align-items: center; margin: 720px; font-size: 100%;"> <br/></g>
<h style="color: white; align-items: center; margin: 720px; font-size: 100%;"> <br/></h>
		<a href="index.php" style="color: white; align-items: 100px; margin: 530px; font-size: 200%;">Perpustakaan Jurusan Elektro<br/></a>
		<b style="color: white; align-items: center; margin: 700px; font-size: 190%;">(PJE)</b></c>
	  </div>
	<form method="post" name="form_login" id="form_login" action="proses-login.php" style="margin-top: 30px;">
		<table class="form">
			<tr>
				<td colspan="2">
					<h1 align="center">Login Page</h1>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" id="username" />
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" id="password" />
				</td>
			</tr>
			<tr style="height:10px"></tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="login" id="login" value="Login" class="btn btn-submit" />
				</td>
			</tr>
		</table>
	</form>
	<footer>
    <div class="login-box-body">
	<b style="color: rgba(47, 107, 180, 0.977); margin: 600px;"> <br/></b>
       <a style="color: rgba(47, 107, 180, 0.977); margin: center"> Copyright &copy; Politeknik Negeri Semarang </a>
    </div>
  </footer>
</body>
</html>