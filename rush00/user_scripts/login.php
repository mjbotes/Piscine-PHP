<?php
	session_start();

	if(isset($_SESSION["is_login"]) && $_SESSION["is_login"] === true){
		header("location: index.php");
		exit;
	}

	require_once "../config.php";

	$user = $pass = "";
	$er_user = $er_pass = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty(trim($_POST["user"]))){
			$er_user = "please enter username";
		} else {
			$user = trim($_POST["user"]);
		}
		if(empty(trim($_POST["pass"]))){
			$er_pass = "please enter password";
		} else {
			$pass = trim($_POST["pass"]);
		}

		if (empty($er_pass) && empty($er_user)){
				$sql = "SELECT user_id, name, password FROM users WHERE email= ?";
			if ($stmt = mysqli_prepare($link, $sql))
			{
				mysqli_stmt_bind_param($stmt, "s", $param_username);
				$param_username = $user;
				if(mysqli_stmt_execute($stmt)){
					mysqli_stmt_store_result($stmt);
					if (mysqli_stmt_num_rows($stmt) == 1){
						mysqli_stmt_bind_result($stmt, $id, $name, $h_pass);
						if(mysqli_stmt_fetch($stmt)){
							if(password_verify($pass,$h_pass)) {
								session_start();
								$_SESSION["is_login"] = true;
								$_SESSION["ID"] = $user_id;
								$_SESSION["Name"] = $name;
								header("location: index.php");
							} else{
								$er_pass = "Incorrect password: $pass $h_pass";
							}
						}
					} else {
						$er_user = "Email is not valid.";
					}
				} else {
					echo "please try again later.";
				}
			}
			mysqli_stmt_close($stmt);
		}
		mysqli_close($link);
	}
?>
