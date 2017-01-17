<?php
	function ft_is_sort($tab)
	{
		$array = $tab;
		sort($array);
		if($array == $tab)
			return(true);
		else
			return(false);
	}
?>
