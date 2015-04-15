#!/usr/bin/php
<?php
	$arg = str_ireplace("  ", " ", $argv[1]);
	while (strstr($arg, "  "))
	{
		$arg = str_ireplace("  ", " ", $arg);
	}
	$arg = trim($arg);
	print("$arg\n");
?>