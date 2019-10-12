#!/usr/bin/env php
<?php
	if ($argc < 3)
		exit;
	$find = $argv[1];
	for ($i = 2; $i < $argc; $i++)
	{
		$arr = explode(":",$argv[$i]);
		if ($arr[0] == $find)
		{
			echo "$arr[1]\n";
			exit;
		}
	}
?>
