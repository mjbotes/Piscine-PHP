#!/usr/bin/env php
<?php
	if ($argc == 1)
		exit;
	$str = $argv[1];
	for ($i = 2; $i <= $argc; $i++)
	{
		$str = $str." ".$argv[$i];
	}
	$str = trim(preg_replace("/\s+/", " ", $str));
	$arr = explode(" ",$str);
	sort($arr);
	foreach ($arr as $str)
		echo "$str\n";
?>
