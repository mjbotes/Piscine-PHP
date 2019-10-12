#!/usr/bin/env php
<?php
	if ($argc != 2)
	{
		echo "Incorrect Parameters";
		exit;
	}
	$opp = trim(preg_replace("([0-9]+)", " ", $argv[1]));
	$num = explode($opp, $argv[1]);
	$a = trim($num[0]);
	$b = trim($num[1]);
	if (is_numeric($a) && is_numeric($b))
	{
		if ($opp == "+")
			$res = $a + $b;
		elseif ($opp == "-")
			$res = $a - $b;
		elseif ($opp == "/" && $b != 0)
			$res = $a / $b;
		elseif ($opp == "*")
			$res = $a * $b;
		elseif ($opp == "%" && $b != 0)
			$res = $a % $b;
		else
		{
			if (($opp == "/" || $opp == "%") && $b == 0)
				echo "Math Error\n";
			else
				echo "Syntax Error\n";
			exit();
		}
			echo $res."\n";
	}
	else
		echo "Syntax Error\n";
?>
