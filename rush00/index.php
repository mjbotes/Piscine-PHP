<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel = "stylesheet"
	type = "text/css"
	href = "style.css" />
</head>
<body>
	<header>
		<h1>Shop</h1>
		<div class="userd">
			<?php
				require_once "user_scripts/user_bar.php";
			?>
		</div>
	</header>
	<div class="nav">
		<a href="index.php">Home</a>
		<a>About</a>
		<a class="empty"></a>
		<a href="login.php">Login or my account</a>
		<a href="cart.php">Cart</a>
	</div>
	<div class="main">
		<div class="products"><div class="item">
			<img src="p1.jpg"><h2>Gingerbread House</h2></div></div>
	</div>
</body>
</html>
