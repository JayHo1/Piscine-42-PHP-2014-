<?php
	function ft_is_sort($array)
	{
		$tab = $array;
		sort($tab);
		if ($array === $tab)
			return (true);
		return (false);
	}
?>