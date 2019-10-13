<?php
	session_start();
	if ($_SESSION["is_login"] === true) {
		echo '<a>'.$_SESSION["Name"].'</a> | <a href="logout.php">logout</a>';
	} else {
		echo "<a href='login.php'>Login</a>";
	}
?>
