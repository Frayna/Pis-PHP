<?php
	function taken($str, $file)
	{
		foreach ($file as $key => $value) 
		{
			if($str == $value["login"])
				return(true);
		}
		return(false);
	}

	if($_POST["submit"] === "OK" && $_POST["login"] && $_POST["passwd"])
	{
		if(!file_exists("./private"))
			mkdir("./private");
	if(file_exists("./private/passwd"))
	{
			$file = unserialize(file_get_contents("./private/passwd"));
			if(taken($_POST["login"],$file))
			{
				echo "ERROR \n";
				return;
			}
	}
		// if (!file_exists("private/passwd"))
			// mkdir("private/passwd");
		$new_account["login"] = $_POST["login"];
		$new_account["passwd"] = $_POST["passwd"];
		$new_account["passwd"] = hash("whirlpool", $new_account["passwd"]);
	$file[] = $new_account;
		file_put_contents("./private/passwd", serialize($file));

	echo "OK \n";

	}
	else
		echo "ERROR \n";
?>
