<?php
	include ("lire_csv.php");
	session_start();

	$i = 0;
	$tab_product = lire_csv("catalogue.csv", ",");
	while ($tab_product[$i])
	{
		$tab[] = $tab_product[$i][0];
		$i++;
	}

?>

<?php require 'header.php' ?>
<?php require 'navbar.php' ?>

	<div id="product-page">
		<div class="category">
			<ul>
				<li><a href="#">Hauts</a></li>
				<li><a href="#">Bas</a></li>
				<li><a href="#">Chaussures</a></li>
			</ul>
		</div>
		<div class="products">
			<center><table>
			<tr>
				<th>Product 1</th>
				<th>Product 2</th>
				<th>Product 3</th>
				<th>Product 4</th>
			</tr>
			<tr>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[0]"?>"><img src="http://www.lebarboteur.com/wp-content/uploads/2012/05/mocassin-homme-500x500.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[1]"?>"><img src="http://i2.cdscdn.com/pdt2/6/2/5/1/700x700/mp00145625/rw/basket-nike-blazer-mid-prem.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[2]"?>"><img src="http://www.laboutiqueofficielle.com/media/produit/img/GUIZMO_TS_ESPERANCE_NOI_011_427x427.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[3]"?>"><img src="http://i2.cdscdn.com/pdt2/1/3/4/1/700x700/mp00331134/rw/chemise-homme-jean-cintree.jpg"></a></td>
			</tr>
			<tr>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[4]"?>"><img src="http://cdn2-public.ladmedia.fr/var/public/storage/images/look/toutes-les-news-look/mode-le-sweat-shirt-en-hausse-235151/2466471-1-fre-FR/Mode-le-sweat-shirt-en-hausse_portrait_w674.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[5]"?>"><img src="http://www.silvery-destockjean.com/150-538-large/pull-homme-tendance-redbridge-maille-torsade.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[6]"?>"><img src="http://i2.cdscdn.com/pdt2/r/a/n/1/700x700/p649lotgran/rw/nypd-2-pantalons-de-jogging-homme.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[7]"?>"><img src="http://i2.cdscdn.com/pdt2/y/0/1/1/700x700/cks10r8yy01/rw/diesel-jean-thavar-homme.jpg"></a></td>
			</tr>
			<tr>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[8]"?>"><img src="http://i2.cdscdn.com/pdt2/9/9/2/1/700x700/mp00785992/rw/baggy.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[9]"?>"><img src="http://www.surmesurepascher.com/cpimg/20121218130637883788.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[10]"?>"><img src="http://www.valoufloc.com/image/cache/chaussettes-homme-personnalise-i-love-you-250x300.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[11]"?>"><img src="http://img.pecheur.com/bottes-homme-dam-quest-thermo-z-807-80762.jpg"></a></td>
			</tr>
			<tr>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[12]"?>"><img src="http://i2.cdscdn.com/pdt2/9/9/2/1/700x700/mp00785992/rw/baggy.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[13]"?>"><img src="http://www.surmesurepascher.com/cpimg/20121218130637883788.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[14]"?>"><img src="http://www.valoufloc.com/image/cache/chaussettes-homme-personnalise-i-love-you-250x300.jpg"></a></td>
				<td class="category1"><a href="<?php echo "http://j03.local.42.fr:8080/product-page.php?id="."$tab[15]"?>"><img src="http://img.pecheur.com/bottes-homme-dam-quest-thermo-z-807-80762.jpg"></a></td>
			</tr>
			</table>
			</center>
		</div>
	</div>

<?php require 'footer.php' ?>