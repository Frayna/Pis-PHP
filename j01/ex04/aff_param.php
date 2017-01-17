#!/usr/bin/php
<?php
	if($argc > 1)
	{
	$array = $argv;
	unset($array[0]);
	$str = join($array, "\n");
	echo($str . "\n");
	}
?>
