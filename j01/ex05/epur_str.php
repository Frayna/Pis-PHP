#!/usr/bin/php
<?php
	if($argc > 1)
	{
	$array = explode(" ", $argv[1]);
	$ret = array();
	foreach($array as $k=>$t)
	{
		if ($t != NULL)
			$ret[$k] = $t;
	}
	$str = join($ret, " ");
	if($str != NULL)
		echo($str . "\n");
	}
?>
