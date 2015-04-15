<?php
	if ($_POST['submit'] === "OK" && $_POST['login'] != "" && $_POST['newpw'] != "")
	{
		$file = file_get_contents("../private/passwd");
		if ($file === FALSE)
			echo "ERROR\n";
		else
		{	
			$i = 0;
			$users = unserialize($file);
			$newpw = hash('sha512', $_POST['newpw']);
			$account = ["login" => $_POST['login'], "passwd" => $newpw];
			foreach ($users as $key => $cmp)
			{
				if ($cmp["login"] === $account["login"])
				{
					if ($cmp["passwd"] === hash('sha512', $_POST['oldpw']))
					{
						$i = 1;
						$users[$key]["passwd"] = $newpw;
					}
				}
			}
			if ($i == 0)
				echo "ERROR\n";
			else
			{
				file_put_contents("../private/passwd", serialize($users));
				echo "OK\n";
			}
		}	
	}
	else	
		echo "ERROR\n";
?>