<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel = "stylesheet"
	type = "text/css"
	href = "style/style.css" />
</head>
<body>
	<header>
	</header>
	<?php
		require_once "scripts/nav_script.php";
	?>
	<table>
		<tr><th></th><th>Product Name</th><th>Price</th></tr>
		<?php
	require_once "scripts/config.php";
	$sql = "SELECT * FROM `products`";
	echo "BOB";
	if ($result=mysqli_query($link,$sql)) {
		while ($row=mysqli_fetch_row($result))
		{
			echo '<tr><td><img src="imgs/products/'.$row[1].'"></td><td>'.$row[2].'</td><td>'.$row[3].'</td><td><img src="imgs/mod.png"></td><td><img src="imgs/del.png"></td></tr>';
		}
		mysqli_free_result($result);
	}	
?>
	</table>
</body>
</html>
