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
?>
