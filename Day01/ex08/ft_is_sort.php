#!/usr/bin/env php
<?php
	function ft_is_sort($arr)
	{
		$check = $arr;
		sort($check);
		if ($arr == $check)
			return TRUE;
		return FALSE;
	}
?>
