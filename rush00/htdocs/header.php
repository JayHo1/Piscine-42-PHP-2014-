<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ecommerce</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">
	</head>
	<body>
	<div id ="header">
		<div class="title">
			<a href="index.php"><img src="img/logo.png"></a>
		</div>
		<div class="title">
			<h1>ALADIN</h1>
		</div>
		<div class="title">
		<?php if ($_SESSION['connection'] == 1): ?>
			<ul class="wrap">
					<li><a href="logout.php">Logout</a></li>
			</ul>
		<?php else : ?>
			<ul class="wrap">
				<li> <a href="login.php">Login</a></li>
				<li> <a href="create.html">Register</a></li>
			</ul>
		<?php endif; ?>
		</div>
	</div>
	</body>
</html>
