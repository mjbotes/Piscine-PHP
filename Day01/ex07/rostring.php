#!/usr/bin/env php
<?php
	if ($argc == 1)
		exit;
	$str = trim($argv[1]);
	$arr = explode(" ",$str);
	for ($i = 1; $i < count($arr); $i++)
		echo "$arr[$i] ";
	echo "$arr[0]\n";
?>
