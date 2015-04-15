#!/usr/bin/php
<?php
	function ft_split($str)
    {
        $tab = str_replace("\t", " ", $str);
        $tab = explode(" ", $tab);
        foreach($tab as $cmp)
            if($cmp != "")
                $val[$i++] = $cmp;
        sort($val, SORT_REGULAR);
        return ($val);
    }

    if ($argc > 1)
	{
		$i = 1;
		$k = 0;
		while ($i < $argc)
		{
			$tmp = ft_split($argv[$i]);
			$len_tmp = count($tmp);
			$j = 0;
			while ($j < $len_tmp)
			{
				$split[$k] = $tmp[$j];
				$j++;
				$k++;
			}
			$i++;
		}
		sort($split);
		foreach($split as $value)
			print($value."\n");
	}
?>