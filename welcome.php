<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: index.php"); // Ganti dengan halaman login
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Pengaturan</label>
                    <label for="chk" aria-hidden="true"><?php
                        echo "Selamat datang, " . $_SESSION['username'] . "!";
                    ?></label>
				</form>
			</div>

			<div class="login">
				<form action="backend/logout.php">
					<label for="chk" aria-hidden="true">keluar</label>
					<button href="backend/logout.php">keluar</button>
				</form>
			</div>
	</div>
</body>
</html>