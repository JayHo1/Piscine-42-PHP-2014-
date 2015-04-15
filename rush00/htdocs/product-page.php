<?php
	include ("lire_csv.php");
	session_start();

	$tab_product = lire_csv("catalogue.csv", ",");
	$var = $_GET['id'];

?>
<?php require 'header.php' ?>
<?php require 'navbar.php' ?>

<div id="size-line">
	<hr />
</div>
<div id="element">
	<div class="element">
		<a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id=".$var?>"><img src="<?php echo $tab_product[$var][4] ?>"></a>
	</div>
	<div class="element">
		<h3><?php echo $tab_product[$var][1]?></h3><br />
		<p>LOLO</p><br />
		<p><?php echo "Price: $".$tab_product[$var][2]?></p><br />
		<form class="add" action="cart.php", method="POST">
			<button type="submit" name="submit" value="<?php echo $var?>">Add to cart</button>
		</form>
	</div>
</div>
<div id="size-line">
	<hr />
</div>