<?php
	session_start();

if (($_SESSSION['connection']) == 0)
{
	if ($_POST['submit'] === "OK")
	{
		$file = file_get_contents("../private/passwd");
		if ($file === FALSE)
			echo "ERROR\n";
		else
		{	
			$i = 0;
			$users = unserialize($file);
			$passwd = hash('sha512', $_POST['passwd']);
			$account = ["login" => $_POST['login'], "passwd" => $passwd];
			foreach ($users as $key => $cmp)
			{
				if ($cmp["login"] === $account["login"])
				{
					if ($cmp["passwd"] === $account["passwd"])
					{
						$i = 1;
						echo "You are logged in.";
						$_SESSION["login"] = $cmp["login"];
						$_SESSION["connection"] = 1;
						echo $_SESSION["conection"]. "\n";
						echo "<a href=\"index.php\">Back to home</a>";
					}
				}
			}
			if ($i == 0)
			{
				echo "Wrong password\n";
				echo "<a href=\"login.html\">Try again</a>";
			}
		}	
	}
}
?>

<?php require 'header.php' ?>
	<form action="login.php" method="POST">
		Identifiant: <input type="text" name="login" value="" /> 
		<br />
		Mot de passe: <input type="password" name="passwd" value="" /> 
		<input type="submit" name="submit" value="OK" />
</form>