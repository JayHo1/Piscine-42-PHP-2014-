#!/usr/bin/php
<?php
	$line = preg_split("/ /", $argv[1]);	
	$check = true;

	if (count($line) != 5)
		$check = false;
	if ($check)
	{
		$day = preg_match("/[lL]undi|[mM]ardi|[mM]ercredi|[jJ]eudi|[vV]endredi|[sS]amedi|[dD]imanche/", $line[0]);
		if ($day == false)
			$check = false;
	}
	if ($check)
	{
		$date = $line[1];
		if (strlen($date) > 2)
			$check = false;
		if ($date > "31" || $date == "0")
			$check = false;
	}
	if ($check)
	{
		$month = preg_match("/[jJ]anvier|[fF](é|e)vrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]o(u|û])t|[sS]eptembre|[oO]ctobre|Novembre|[dD](é|e)cembre/", $line[2]);
		if ($month == false)
			$check = false;
	}
	if ($check)
	{
		$year = $line[3];
		if (strlen($year) > 4)
			$check = false;
		if (!is_numeric($year))
			$check = false;
	}
	if ($check)
	{
		$time = $line[4];
		if (strlen($time) != 8)
			$check = false;
		if ($check)
		{
			$time = explode(":", $time);
			$hour = $time[0];
			$min = $time[1];
			$sec = $time[2];
		}
		if ($check)
		{
			if ($hour > "24" || $min > "59" || $sec > "59")
				$check = false;
		}
	}
	if (!$check)
	 	echo "Wrong Format\n";
	else
	{
		date_default_timezone_set("Europe/Paris");
		print(mktime($hour, $min, $sec, $line[2] + 1, $line[1], $year));
		echo "\n";
	}
?>