#!/usr/bin/php
<?php
while(1)
{
	echo("Entrez un nombre: ");
	$entry = trim(fgets(STDIN));
	if(feof(STDIN) == true)
	{
		echo"\n";
		break;
	}
	if (!is_numeric($entry))
	{
		echo("'" . $entry . "' n'est pas un chiffre\n");
	}
	else if($entry % 2 == 0)
	{
		echo("Le chiffre " . $entry . " est Pair\n");
	}
	else
		echo("Le chiffre " . $entry . " est Impair\n");
}
?>
