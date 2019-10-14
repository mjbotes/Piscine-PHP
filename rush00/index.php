<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel = "stylesheet"
	type = "text/css"
	href = "./style/style.css" />
</head>
<body>
	<header>
		<img src="./imgs/header/logo.png" style="width:12%;">
		<div class="userd">
			<?php
				require_once "user_scripts/user_bar.php";
			?>
		</div>
	</header>
	<div class="nav">
		<a href="index.php">Home</a>
		<a href="about.php">About</a>
		<a href="login.php">Login or my account</a>
		<a href="cart.php">Cart</a>
	</div>
	<div class="main">
		<div class="products">
			<?php
				require_once "config.php";
				$sql="SELECT img_link, p_name, price FROM products";
				if ($result=mysqli_query($link,$sql))
				{
				while ($row=mysqli_fetch_row($result))
				  {
				  echo '<div class="item"><img src="imgs\products\\'.$row[0].'"><h2>'.$row[1].'</h2><p>'.$row[2].'</p></div>';
				  }
				mysqli_free_result($result);
			  }	
			?>
		</div>
	</div>
</body>
</html>
