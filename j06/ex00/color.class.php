<?php
class color
{
	public	$red;
	public	$green;
	public	$blue;
	public  $verbose;

	function __construct( array $array )
	{
		$this->red = $array['red'];
		$this->green = $array['green'];
		$this->blue = $array['blue'];
		$this->verbose = false;
	}
	function __destruct()
	{

	}
	function __toString()
	{
		return($this->red . $this->green . $this->blue);
	}
	function _doc($self::verbose)
}

$dot = new color(array('red' => 24, 'green' => 0, 'blue' => 240));
echo ($dot);


?>