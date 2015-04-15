#!/usr/bin/php
<?php
	while (42)
	{
		echo "Entrez un nombre: ";
		$number = trim(fgets(STDIN));
		if (feof(STDIN))
			break ;
		if (!is_numeric($number))
			echo "'$number' n'est pas un chiffre\n";
		else if ($number % 2 == 0)
			echo "Le chiffre $number est Pair\n";
		else
			echo "Le chiffre $number est Impair\n";
	}
	echo "\n";
?>