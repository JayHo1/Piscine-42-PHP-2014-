<?php
if ($_POST['login'] != "" && $_POST['oldpw'] != "" && $_POST['newpw'] != "" && $_POST['submit'] == "OK")
{
	$index = 0;
	$tab = unserialize(file_get_contents('../private/passwd'));
	foreach ($tab as $str)
	{
		foreach ($str as $login => $pwd)
		{
			if ($login == $_POST['login'] && $pwd == hash('sha512', $_POST['oldpw']))
			{
				$tableau[] = array($_POST['login'] => hash('sha512', $_POST['newpw']));
				$index++;
			}
			else
				$tableau[] = array($login => $pwd);
		}
	}
	file_put_contents('../private/passwd', serialize($tableau));
	if ($index == 1)
		echo "Le mot de passe a ete modifier.\n";
	else
		echo "Le login ou les mots de passe sont incorrects.\n";
}
else
	echo "Veuillez remplir les champs correctement.\n";
?>
