#!/usr/bin/php
<?php
function ft_split($str)
{
	$ret = array();
	$array = explode(" ", $str);
	sort($array);
	foreach($array as $k=>$elem)
	{
		if ($elem != NULL)
			$ret[$k] = $elem;
	}
	return($ret);
}

	$array = $argv;
	unset($array[0]);
	$res = array();
	foreach($array as $elem)
		$res = array_merge($res, ft_split($elem));
	sort($res);
	foreach($res as $yolo)
		echo($yolo . "\n");
?>
