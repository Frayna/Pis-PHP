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
	session_start();
	if($_GET["login"] && $_GET["passwd"] && $_GET["login"] !== "" && $_GET["passwd"] !== "")
	{
		if (auth($_GET["login"], $_GET["passwd"]))
		{
			$_SESSION["loggued_on_user"] = $_GET["login"];
			echo "OK\n";
		}
		else
		{
			$_SESSION["loggued_on_user"] = "";
			echo "ERROR\n";	
		}
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		echo "ERROR\n";	
	}
?>