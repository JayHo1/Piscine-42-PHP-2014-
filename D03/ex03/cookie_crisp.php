<?php
	$name = $_GET['name'];
	$value = $_GET['value'];
	$action = $_GET['action'];
	
	if ($action == "set")
		setcookie($name, $value, time() + 3600);
	else if ($action == "get")
	{
		$val = $_COOKIE[$name];
		if ($val)
			echo $val."\n";
	}
	else if ($action == "del")
		setcookie($name, $value, time() - 1);
?>