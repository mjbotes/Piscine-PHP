#!/usr/bin/env php
<?php
	function get_month($m)
	{
		$m = strtolower($m);
		$months = array(
						"janvier" => 1,
						"fevrier" => 2,
						"mars" => 3,
						"avril" => 4,
						"mai" => 5,
						"juin" => 6,
						"juillet" => 7,
						"aout" => 8,
		   				"septembre" => 9,
						"octobre" => 10,
						"novembre" => 11,
						"decembre" => 12
						);
		return ($months[$m]);
	}
	if ($argc != 1)
	{
		if (preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-9]{2}) ([Jj]anvier|[Ff]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $time))
		{
			date_default_timezone_set("Europe/Paris");
			$mk = mktime($time[5], $time[6], $time[7],get_month($time[3]), $time[2], $time[4]);
		}
		else
			echo("Wrong Format");
		echo("\n");
	}
?>
