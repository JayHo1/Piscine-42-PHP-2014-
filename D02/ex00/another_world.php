#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$array = preg_replace("/[ \t]+/", " ", $argv[1]);
		$array = trim($array);
		echo "$array\n";
	}
?>