<?php
	$i = 0;
	if(!file_exists("../private"))
		mkdir("../private");
	if ($_POST['submit'] === "OK" && $_POST['passwd'] != "" && $_POST['login'] != "")
	{
		if (file_exists("../private/passwd"))
			$users = unserialize(file_get_contents("../private/passwd"));
		else
			$users = NULL;
		$account = ["login" => $_POST['login'], "passwd" => hash('sha512', $_POST['passwd'])];
		foreach ($users as $cmp)
		{
			if ($cmp["login"] === $account["login"])
			{
				echo "ERROR\n";
				$i = 1;
			}
		}
		if ($i != 1)
		{
			$users[] = $account;
			echo "OK\n";
		}
		file_put_contents("../private/passwd", serialize($users));
	}
	else
		echo "ERROR\n";
?>