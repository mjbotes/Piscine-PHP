#!/usr/bin/env php
<?php
	if ($argc != 4)
		exit;
	$a = trim($argv[1]);
	$b = trim($argv[3]);
	$opp = trim($argv[2]);
	if (is_numeric($a) && is_numeric($b))
	{
		if ($opp == "+")
			$res = $a + $b;
		elseif ($opp == "-")
			$res = $a - $b;
		elseif ($opp == "/")
			$res = $a / $b;
		elseif ($opp == "*")
			$res = $a * $b;
		elseif ($opp == "%")
			$res = $a % $b;
		else
			exit();
		echo $res."\n";
	}
?>
