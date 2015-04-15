<?php
	session_start();
	if ($_SESSION['connection'] != 1)
		$_SESSION["connection"] = 0;
?>
<?php require 'header.php' ?>

<?php require 'navbar.php' ?>
	
	<div class="product">
		<img src="img/product/model.jpg">
	</div>

<?php require 'footer.php' ?>
</body>
</html></head>
<!-- <div class="home">
	<div class="row">
		<div class="wrap">
			<div class="box">
				<div class="product full">
					<a href="#">
						<img src="img/ipad-mini.jpeg">
					</a>
					<div class="description">
						Apple, <strong>Ipad :</strong>
						<a href="#" class="price">1500,00 $</a>
					</div>
					<a href="#" class="gift">
						Gift
					</a>
					<div class="rating">
						<span>Rating :</span>
						<ul>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#" class="off">5</a></li>
						</ul>
					</div>
					<a class="add" href="#"> add</a>
				</div>
			</div>
		</div>
	</div>
<div id="pagination">
	<ul class="wrap">
		<li><a href="#"> Prev </a></li>
		<li class="page"> Page : <a href="#">2</a> of 3</li>
		<li><a href="#"> Next </a></li>
	</ul>
</div> -->

<!-- <ul class="panier">
					<li class="caddie"><a href="#">Caddie</a></li>
					<li class="items">
						ITEMS
						<span>13</span>
					</li>
					<li class="total">
						TOTAL
						<span>1320.90 $</span>
					</li>
				</ul> -->


	<!-- <div id="subheader">
		<div class="wrap">
			<h2> Welcome visitor you can <a href="#">login</a> or <a href"#">create an account</a> .</h2>
		</div>
	</div>

	<div id="wrap">
		<div id="menu">
			<ul class="wrap">
				<li> <a href="#">Sex Toy 1</a></li>
				<li> <a href="#">Sex Toy 2</a></li>
				<li> <a href="#">Sex Toy 3</a></li>
				<li> <a href="#">Sex Toy 4</a></li>
			</ul>
		</div>
	</div>

	<div id="ariane">
		<div class="wrap"> Yyou are right here : Home >> <a href="#"> Hello </a>
		</div>
	</div> -->