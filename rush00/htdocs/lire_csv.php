<?php
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
?>