<?php
	$login = $_GET["login"];
	$passwd = $_GET["passwd"];

	session_start();
	if ($login)
		$_SESSION["login"] = $login;
	if ($passwd)
		$_SESSION["passwd"] = $passwd;
	if (!$_SESSION["login"])
		$_SESSION = "";
	if (!$_SESSION["passwd"])
		$_SESSION = "";
?>
<html><body>
<form action="http://j04.local.42.fr:8080/ex01/index.php" method="GET">
	Identifiant: <input type="text" name="login" value="<?= $_SESSION["login"]?>" /> 
	<br />
	Mot de passe: <input type="password" name="passwd" value="<?= $_SESSION["passwd"]?>" /> 
	<input type="submit" name="submit" value="OK" />
</form>
</html></body>
