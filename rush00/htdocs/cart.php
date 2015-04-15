<?php
session_start();
include ("lire_csv.php");

$tab_product = lire_csv("catalogue.csv", ",");
$var = $_POST['submit'];
$l = $tab_product[$var][1];
$p = $tab_product[$var][2];
$q = $tab_product[$var][3];


ajouterArticle($l,$q,$p);
function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['libelleProduit'] = array();
      $_SESSION['panier']['qteProduit'] = array();
      $_SESSION['panier']['prixProduit'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}


function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
         array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
         array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
         #echo "string\n";
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


/**
 * Modifie la quantité d'un article
 * @param $libelleProduit
 * @param $qteProduit
 * @return void
 */
function modifierQTeArticle($libelleProduit,$qteProduit){
   //Si le panier éxiste
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qteProduit > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
         }
      }
      else
      supprimerArticle($libelleProduit);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

/**
 * Supprime un article du panier
 * @param $libelleProduit
 * @return unknown_type
 */
function supprimerArticle($libelleProduit){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['libelleProduit'] = array();
      $tmp['qteProduit'] = array();
      $tmp['prixProduit'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
      {
         if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
         {
            array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
            array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
            array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


/**
 * Montant total du panier
 * @return int
 */
function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
   {
      $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   }
   return $total;
}


/**
 * Fonction de suppression du panier
 * @return void
 */
function supprimePanier(){
   unset($_SESSION['panier']);
}

/**
 * Permet de savoir si le panier est verrouillé
 * @return booleen
 */
function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

/**
 * Compte le nombre d'articles différents dans le panier
 * @return int
 */
function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['libelleProduit']);
   else
   return 0;

}

echo '<?xml version="1.0" encoding="utf-8"?>';?>

<?php require 'header.php' ?>
<?php require 'navbar.php' ?>

<div class="cart-add">
	<form method="post" action="cart.php">
	<center><table style="width: 600px">
		<tr>
			<td class="cart-refresh" colspan="4">Your Products</td>
		</tr>
		<tr>
			<td>Libellé</td>
			<td>Quantite</td>
			<td>Prix Unitaire</td>
			<td>Action</td>
		</tr>


		<?php
		if (creationPanier())
		{
		   $nbArticles=count($_SESSION['panier']['libelleProduit']);
		   if ($nbArticles <= 0)
		   echo "<tr><td>Votre panier est vide </ td></tr>";
		   else
		   {
		      for ($i=0 ;$i < $nbArticles ; $i++)
		      {
		         echo "<tr>";
		         echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
		         echo "<td>".htmlspecialchars(1)."</td>";
		         echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
		         echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">XX</a></td>";
		         echo "</tr>";
		      }

		      echo "<tr><td colspan=\"2\"> </td>";
		      echo "<td colspan=\"2\">";
		      echo "</td></tr>";

		      echo "<tr class=\"cart-refresh\"><td colspan=\"4\">";
		      echo "<input type=\"submit\" value=\"Proceed to Checkout\"/>";
		      echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

		      echo "</td></tr>";
		   }
		}
		?>
	</table></center>
	</form>
</div>