#!/usr/bin/php
<?php
function ft_plop($str)
{
	$ret = array();
	$array = explode(" ", $str);
	foreach($array as $k=>$elem)
	{
		if ($elem != NULL)
			$ret[$k] = $elem;
	}
	return($ret);
}
	$prout = ft_plop($argv[1]);
	$yolo = array();
	$yolo[0] = array_shift($prout);
	$yolo = array_merge($prout, $yolo);
	foreach($yolo as $tf)
	{
		if($tf != NULL)
			echo($tf . " ");
	}
	if($yolo[0] != null)
		echo("\n");
?>
