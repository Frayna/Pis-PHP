<?php
	function taken($str, $file)
	{
		foreach ($file as $key => $value) 
		{
			if($str == $value["login"])
				return($key);
		}
		return(null);
	}

	if($_POST["submit"] === "OK" && $_POST["login"] && $_POST["oldpw"] && $_POST["newpw"])
	{

	if(file_exists("./private/passwd"))
	 		$file = unserialize(file_get_contents("./private/passwd"));
	else
		echo "ERROR \n";
	if($file && (($user = taken($_POST["login"], $file))) !== null)
	{
		if($file[$user]["passwd"] === hash(whirlpool, $_POST["oldpw"]))
			{
				$file[$user]["passwd"] = hash(whirlpool, $_POST["newpw"]);
			 	file_put_contents("./private/passwd", serialize($file));
			 	echo ("OK" . "\n");
			}
		else
		echo "ERROR \n";
	}
	else
		echo "ERROR \n";
	}
	else
		echo "ERROR \n";
?>
