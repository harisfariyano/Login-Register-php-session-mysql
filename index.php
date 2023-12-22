<?php
session_start();
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Daftar / masuk Form</title>
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="backend/register.php" method="post">
					<label for="chk" aria-hidden="true">Daftar</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit">Daftar</button>
				</form>
			</div>

			<div class="login">
				<form action="backend/login.php" method="post">
					<label for="chk" aria-hidden="true">Masuk</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit">Masuk</button>
				</form>
			</div>
	</div>
</body>
</html>
