<?php
function auth($login, $passwd)
{
	if(file_exists("./private/passwd"))
	{
		$hashed = hash(whirlpool, $passwd);
		$file = unserialize(file_get_contents("./private/passwd"));
		foreach ($file as $key => $value) 
		{
			if($value["login"] === $login && $value["passwd"] === $hashed)
				return(true);
		}
		return(false);
	}
}
?>