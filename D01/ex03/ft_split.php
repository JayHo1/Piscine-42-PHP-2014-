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
?>