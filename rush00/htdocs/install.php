<?php
	session_start();

	$name = $_POST['name'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$url = $_POST['url'];
	$login = "jay";

	function lire_csv($nom_fichier, $separateur =","){
    $row = 0;
    $donnee = array();    
    $f = fopen ($nom_fichier,"r");
    $taille = filesize($nom_fichier)+1;
    while ($donnee = fgetcsv($f, $taille, $separateur)) {
        $result[$row] = $donnee;
        $row++;
    }
    fclose ($f);
    return $result;
}

function ajouter_csv($ajout)
{
    $i = 0;
    $fp = fopen("catalogue.csv", "a+");
    $var = lire_csv("catalogue.csv", ",");
    while ($var[$i])
        $i++;
    fclose($fp);
    $fp = fopen("catalogue.csv", "a+");
    fwrite($fp, $i.",".$ajout."\n", strlen($ajout) +2 + strlen($i));
    fclose($fp);
}

function category($name, $long_tab)
{
    $i = 0;
    while ($long_tab[$i])
    {
        if (strcmp($name, $long_tab[$i][3]) == 0)
            $tableau[] = $i;
        $i++;
    }
    return $tableau;
}

$tab = array($name, $price, $type, $url);
$tab = implode(",", $tab);
ajouter_csv($tab);

?>
<?php if ($_SESSION['connection'] == 1 && ($_SESSION['login']) == "jay"): ?>
	<?php require 'header.php' ?>
	<?php require 'navbar.php' ?>

	<div class="category-creat">
		<form class="" name="add" action="install.php" method="POST">
			Product name : <input type="text" name="name" value="" /><br />
			Price : <input type="text" name="price" value="" /><br />
			Type : <input type="text" name="type" value="" /><br />
			Link picture : <input type="text" name="url" value="" /><br />
			<button><input type="submit" name="submit" value="OK"></button>
		</form>
	</div>
<?php else : ?>
	<h3>FORBIDDEN ACCES</h3>
<?php endif; ?>