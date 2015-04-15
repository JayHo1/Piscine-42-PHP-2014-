<?php
	session_start();

?>


<?php if ($_SESSION['connection'] == 1 && ($_SESSION['login']) == "jay"): ?>
	<div id="navbar">
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="cart.php">Cart</a></li>
			<li><a href="install.php">Admin-Category</a></li>
		</ul>
	</div>
</div>
<?php else : ?>
<div id="navbar">
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="cart.php">Cart</a></li>
			<li><a href="#">My account</a></li>
		</ul>
	</div>
</div>
<?php endif; ?>