#!/usr/bin/php
<?php
	while(1)
	{
		echo "Enter a number: ";
		$i = trim(fgets(STDIN));
		if (feof(STDIN))
		{
			echo "\n";
			exit;
		}
		if (is_numeric($i))
		{
			if ($i % 2 == 0)
				echo "Even\n";
			else
				echo "Odd\n";
		}
		else
		{
			echo "'$i' is not a number\n";
		}
	}
?>
