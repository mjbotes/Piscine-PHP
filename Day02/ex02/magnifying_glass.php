#!/usr/bin/env php
<?php
	while (!feof(STDIN)) {
		$line = fgets(STDIN);
		$line = preg_replace_callback(
			'/<a.*?title="(.*?)".*?>/',
			function ($matches) {
				return str_replace($matches[1], strtoupper($matches[1]), $matches[0]);
			},
			$line
		);
		$line = preg_replace_callback(
			'/<a.*?>(.*?)</',
			function ($matches) {
				return str_replace($matches[1], strtoupper($matches[1]), $matches[0]);
			},
			$line
		);
		echo $line;
	}
	fclose($fp);
	?>
?>
